<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\liveChat as liveChat;

class StagesController extends Controller
{
    public function afterBirth() {
      if(empty($_COOKIE['uni_id'])) {
        $uni_id = uniqid();
        $uId = setcookie('uni_id', $uni_id, time()+2592000);
      } else {
        $uId = $_COOKIE['uni_id'];
      }
      $liveChats = liveChat::where('user_id', $uId)->get();
      return view('user.stages.after_birth', ['liveChats' => $liveChats]);
    }

    public function afterMarriage() {
      if(empty($_COOKIE['uni_id'])) {
        $uni_id = uniqid();
        $uId = setcookie('uni_id', $uni_id, time()+2592000);
      } else {
        $uId = $_COOKIE['uni_id'];
      }
      $liveChats = liveChat::where('user_id', $uId)->get();
      return view('user.stages.after_marriage', ['liveChats' => $liveChats]);
    }

    public function planning() {
      if(empty($_COOKIE['uni_id'])) {
        $uni_id = uniqid();
        $uId = setcookie('uni_id', $uni_id, time()+2592000);
      } else {
        $uId = $_COOKIE['uni_id'];
      }
      $liveChats = liveChat::where('user_id', $uId)->get();
      return view('user.stages.planning_before_pregnancy', ['liveChats' => $liveChats]);
    }

    public function duringPregnancy() {
      if(empty($_COOKIE['uni_id'])) {
        $uni_id = uniqid();
        $uId = setcookie('uni_id', $uni_id, time()+2592000);
      } else {
        $uId = $_COOKIE['uni_id'];
      }
      $liveChats = liveChat::where('user_id', $uId)->get();
      return view('user.stages.during_pregnancy', ['liveChats' => $liveChats]);
    }
}
