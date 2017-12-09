<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbComment as Comment;
use Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        'comment' => 'required'
      ]);

      $comment = new Comment;
      $comment->user_id = $request->user_id;
      $comment->after_birth_post_id = $request->post_id;
      $comment->comment = $request->comment;
      $comment->save();

      Session::flash('comment_success', 'You have commented successfully!');
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
        $comment = Comment::find($id);
        return view('user.forum.comment_edit', ['comment' => $comment]);
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
          'comment' => 'required'
        ]);

        $comment = Comment::find($id);
        $comment->comment = $request->comment;
        $comment->save();

        Session::flash('comment_edit_success', 'Comment has been edited successfully!');
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
        $comment = Comment::find($id);
        $comment->delete();

        Session::flash('comment_delete_success', 'Comment has been deleted successfully!');
        return redirect()->route('user.posts.index');
    }
}
