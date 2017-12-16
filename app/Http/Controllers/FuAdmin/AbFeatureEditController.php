<?php

namespace App\Http\Controllers\FuAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbFeature as AbFeature;

class AbFeatureEditController extends Controller
{
    public function babyNutrition($id) {
        $babyNutrition = AbFeature::find($id);
        return view('fuadmin.after_birth_features.edit.babyNutrition', ['babyNutrition' => $babyNutrition]);
    }

    public function motherNutrition($id) {
        $motherNutrition = AbFeature::find($id);
        return view('fuadmin.after_birth_features.edit.motherNutrition', ['motherNutrition' => $motherNutrition]);
    }

    public function vaccination($id) {
        $vaccination = AbFeature::find($id);
        return view('fuadmin.after_birth_features.edit.vaccination', ['vaccination' => $vaccination]);
    }
}
