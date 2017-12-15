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
        return view('fuadmin.after_birth_features.vaccination');
    }

    public function diseases() {
        return view('fuadmin.after_birth_features.diseases');
    }

    public function photoAlbum() {
        return view('fuadmin.after_birth_features.photoAlbum');
    }

    public function guidelines() {
        return view('fuadmin.after_birth_features.guidelines');
    }

    public function calculators() {
        return view('fuadmin.after_birth_features.calculators');
    }
}
