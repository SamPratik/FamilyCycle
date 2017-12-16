<?php

namespace App\Http\Controllers\Answerer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswererController extends Controller
{
    public function __construct() {
        return $this->middleware('auth:answerer');
    }

    public function index() {
        return view('answerer.home');
    }

    public function messages() {
        return view('answerer.messages');
    }
}
