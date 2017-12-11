<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LiveChat as LiveChat;

class LiveChatController extends Controller
{
    public function index() {
        $uId = $_COOKIE['uni_id'];
        //dd($uId);
        //dd($_COOKIE['test']);
        $liveChats = liveChat::where('user_id', $uId)->get();
        $email = "pratik.anwar@gmail.com";
        $out = '';
        foreach ($liveChats as $liveChat) {
            if (!empty($liveChat->answer)) {
              $out .= "<p class='doctor-message'><img src='https://www.gravatar.com/avatar/". md5( strtolower( trim(  $email  ) ) )  . "?d=monsterid'><span>". $liveChat->answer ."</span></p>";
            } else {
              $out .= "<p class='user-message'><span>" . $liveChat->question . "</span></p>";
            }
        }

        return $out;
        //return view('user.home', ['liveChats' => $liveChats]);
    }

    public function store(Request $request) {
        $uId = $_COOKIE['uni_id'];
        $liveChat = new LiveChat;
        $liveChat->user_id = $uId;
        $liveChat->question = $request->question;
        $liveChat->save();

        return 'Question is submitted to database';
    }
}
