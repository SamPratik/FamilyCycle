<?php

namespace App\Http\Controllers\FuAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StagesController extends Controller
{
    public function afterBirth() {
      return view('fuadmin.stages.after_birth');
    }

    public function afterMarriage() {
      return view('fuadmin.stages.after_marriage');
    }

    public function planning() {
      return view('fuadmin.stages.planning_before_pregnancy');
    }

    public function duringPregnancy() {
      return view('fuadmin.stages.during_pregnancy');
    }
}
