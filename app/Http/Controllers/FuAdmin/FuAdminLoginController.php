<?php

namespace App\Http\Controllers\FuAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class FuAdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:fuadmin')->except('logout');
    }

    public function showLoginForm() {
        return view('fuadmin.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('fuadmin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('fuadmin.home'));
        }

        return redirect()->back()->withInput($request->only(['email', 'remember']));
    }
}
