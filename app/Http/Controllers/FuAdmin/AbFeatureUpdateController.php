<?php

namespace App\Http\Controllers\FuAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbFeature as AbFeature;
use Session;

class AbFeatureUpdateController extends Controller
{
    public function babyNutrition(Request $request, $id) {
        $babyNutrition = AbFeature::find($id);
        $babyNutrition->content = $request->content;
        $babyNutrition->save();

        Session::flash('updateSuccess', 'Feature has been updated successfully!');

        return view('fuadmin.after_birth_features.babyNutrition', ['babyNutrition' => $babyNutrition]);
    }

    public function motherNutrition(Request $request, $id) {
        $motherNutrition = AbFeature::find($id);
        $motherNutrition->content = $request->content;
        $motherNutrition->save();

        Session::flash('updateSuccess', 'Feature has been updated successfully!');

        return view('fuadmin.after_birth_features.motherNutrition', ['motherNutrition' => $motherNutrition]);
    }

    public function vaccination(Request $request, $id) {
        $vaccination = AbFeature::find($id);
        $vaccination->content = $request->content;
        $vaccination->save();

        Session::flash('updateSuccess', 'Feature has been updated successfully!');

        return view('fuadmin.after_birth_features.vaccination', ['vaccination' => $vaccination]);
    }
}
