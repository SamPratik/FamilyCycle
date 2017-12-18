<?php

namespace App\Http\Controllers\Answerer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\liveChat as LiveChat;
use DB;
use Auth;

class AnswererController extends Controller
{
    public function __construct() {
        return $this->middleware('auth:answerer');
    }

    public function index() {
        return view('answerer.home');
    }

    public function messages() {
        $liveChats = LiveChat::select(DB::raw('user_id, max(updated_at) as updated_at'))->groupBy('user_id')->orderBy('id', 'DESC')->get();
        return view('answerer.messages', ['liveChats' => $liveChats]);
    }

    public function fullMessage($id) {
        $chats = liveChat::where('user_id', $id)->get();
        return view('answerer.fullMessage', ['chats' => $chats, 'id' => $id]);
    }

    public function messageLoad($id) {
        $chats = liveChat::where('user_id', $id)->get();
        $out = "";
        foreach($chats as $chat) {
          if(empty($chat->question)) {
            $out .= "<p class='doctor-message'>" . $chat->answer . "</p>";
          }
          if(empty($chat->answer)) {
            $out .= "<p class='user-message'>" . $chat->question . "</p>";
          }
        }
        return $out;
    }

    public function messageSubmit(Request $request) {
        $request->validate([
          'chat' => 'required'
        ]);
        $liveChat = new LiveChat;
        $liveChat->user_id = $request->user_id;
        $liveChat->answer = $request->chat;
        $liveChat->doctor_id = Auth::guard('answerer')->user()->id;
        $liveChat->save();
        return "Answer is submitted";
        // return $request;
    }
}
