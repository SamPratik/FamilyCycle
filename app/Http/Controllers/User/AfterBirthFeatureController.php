<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbFeature as AbFeature;

class AfterBirthFeatureController extends Controller
{
    public function babyNutrition() {
        $babyNutrition = AbFeature::find(1);
        return view('user.after_birth_features.babyNutrition', ['babyNutrition' => $babyNutrition]);
    }

    public function motherNutrition() {
        $motherNutrition = AbFeature::find(2);
        return view('user.after_birth_features.motherNutrition', ['motherNutrition' => $motherNutrition]);
    }

    public function vaccination() {
        return view('user.after_birth_features.vaccination');
    }

    public function diseases() {
        return view('user.after_birth_features.diseases');
    }

    public function photoAlbum() {
        return view('user.after_birth_features.photoAlbum');
    }

    public function guidelines() {
        return view('user.after_birth_features.guidelines');
    }

    public function calculators() {
        return view('user.after_birth_features.calculators');
    }
}