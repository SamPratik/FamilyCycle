<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AfterBirthPost as Post;
use App\AbComment as Comment;
use App\liveChat as liveChat;
use Session;
use Auth;

class PostController extends Controller
{
    public function __construct() {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liveChats = liveChat::all();
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('user.forum.index', ['posts' => $posts, 'liveChats' => $liveChats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'post' => 'required'
        ]);

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->post = $request->post;

        $post->save();

        Session::flash('success', 'You have posted successfully!');
        $request->flash();

        return redirect()->route('user.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('user.forum.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          'post' => 'required'
        ]);

        $post = Post::find($id);
        $post->post = $request->post;
        $post->save();

        Session::flash('post_edit_success', 'Post has been edited successfully!');
        return redirect()->route('user.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        $comments = Comment::where('after_birth_post_id', $id);
        $comments->delete();

        Session::flash('post_delete_success', 'Post has been deleted successfully!');
        return redirect()->route('user.posts.index');
    }
}
