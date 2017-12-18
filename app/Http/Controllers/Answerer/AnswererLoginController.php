<?php

namespace App\Http\Controllers\Answerer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AnswererLoginController extends Controller
{
    public function __construct() {
      $this->middleware('guest:answerer');
    }

    public function showLoginForm() {
        return view('answerer.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('answerer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('answerer.messages'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
