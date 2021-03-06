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

        return redirect()->route('fuadmin.ab.babyNutrition');
        //return view('fuadmin.after_birth_features.babyNutrition', ['babyNutrition' => $babyNutrition]);
    }

    public function motherNutrition(Request $request, $id) {
        $motherNutrition = AbFeature::find($id);
        $motherNutrition->content = $request->content;
        $motherNutrition->save();

        Session::flash('updateSuccess', 'Feature has been updated successfully!');
        return redirect()->route('fuadmin.ab.motherNutrition');
    }

    public function vaccination(Request $request, $id) {
        $vaccination = AbFeature::find($id);
        $vaccination->content = $request->content;
        $vaccination->save();

        Session::flash('updateSuccess', 'Feature has been updated successfully!');
        return redirect()->route('fuadmin.ab.vaccination');
    }

    public function diseases(Request $request, $id) {
        $diseases = AbFeature::find($id);
        $diseases->content = $request->content;
        $diseases->save();

        Session::flash('updateSuccess', 'Feature has been updated successfully!');
        return redirect()->route('fuadmin.ab.diseases');
    }

    public function guidelines(Request $request, $id) {
        $guidelines = AbFeature::find($id);
        $guidelines->content = $request->content;
        $guidelines->save();

        Session::flash('updateSuccess', 'Feature has been updated successfully!');
        return redirect()->route('fuadmin.ab.guidelines');
    }
}
