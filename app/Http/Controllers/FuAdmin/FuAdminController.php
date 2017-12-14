<?php

namespace App\Http\Controllers\FuAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FuAdminController extends Controller
{
    public function __construct() {
        return $this->middleware('auth:fuadmin');
    }

    public function index() {
        return view('fuadmin.home');
    }
}
