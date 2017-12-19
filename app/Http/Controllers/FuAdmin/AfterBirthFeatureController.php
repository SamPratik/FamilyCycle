<?php

namespace App\Http\Controllers\FuAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbFeature as AbFeature;

class AfterBirthFeatureController extends Controller
{
    public function babyNutrition() {
        $babyNutrition = AbFeature::find(1);
        return view('fuadmin.after_birth_features.babyNutrition', ['babyNutrition' => $babyNutrition]);
    }

    public function motherNutrition() {
        $motherNutrition = AbFeature::find(2);
        return view('fuadmin.after_birth_features.motherNutrition', ['motherNutrition' => $motherNutrition]);
    }

    public function vaccination() {
        $vaccination = AbFeature::find(3);
        return view('fuadmin.after_birth_features.vaccination', ['vaccination' => $vaccination]);
    }

    public function diseases() {
        $diseases = AbFeature::find(4);
        return view('fuadmin.after_birth_features.diseases', ['diseases' => $diseases]);
    }

    public function photoAlbum() {
        return view('fuadmin.after_birth_features.photoAlbum');
    }

    public function guidelines() {
      $guidelines = AbFeature::find(5);
      return view('fuadmin.after_birth_features.guidelines', ['guidelines' => $guidelines]);
    }

    public function calculators() {
        return view('fuadmin.after_birth_features.calculators');
    }
}
