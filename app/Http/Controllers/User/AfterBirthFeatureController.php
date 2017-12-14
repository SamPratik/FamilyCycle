<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AfterBirthFeatureController extends Controller
{
    public function babyNutrition() {
        return view('user.after_birth_features.babyNutrition');
    }

    public function motherNutrition() {
        return view('user.after_birth_features.motherNutrition');
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
