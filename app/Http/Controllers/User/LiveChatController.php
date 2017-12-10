<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LiveChat as LiveChat;
use Cookie;

class LiveChatController extends Controller
{
    // public function index() {
    //
    // }

    public function store(Request $request) {
        $uId = $_COOKIE['uni_id'];
        $liveChat = new LiveChat;
        $liveChat->user_id = $uId;
        $liveChat->question = $request->question;
        $liveChat->save();

        return 'Question is submitted to database';
    }
}
