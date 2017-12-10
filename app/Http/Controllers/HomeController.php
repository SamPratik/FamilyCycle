<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
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
        $liveChats = liveChat::all();
        return view('user.home', ['liveChats' => $liveChats]);
    }
}
