<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LiveChat as LiveChat;

class LiveChatController extends Controller
{
    public function store(Request $request) {
      $liveChat = new LiveChat;
      $liveChat->user_id = $request->_token;
      $liveChat->question = $request->question;
      $liveChat->save();

      return 'Question is submitted to database';
    }
}
