<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\liveChat as liveChat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(empty($_COOKIE['uni_id'])) {
          $uni_id = uniqid();
          $uId = setcookie('uni_id', $uni_id, time()+2592000);
        } else {
          $uId = $_COOKIE['uni_id'];
        }
        //dd($uId);
        //dd($_COOKIE['test']);
        $liveChats = liveChat::where('user_id', $uId)->get();
        return view('user.home', ['liveChats' => $liveChats]);
    }
}
