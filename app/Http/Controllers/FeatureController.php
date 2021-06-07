<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
     // EDIT Feature

     public function edit(Feature $feature) {

        return view('admin.features.featureEdit', compact('feature'));
    }

    // UPDATE Feature

    public function update(Request $request, Feature $feature) {

        request()->validate([
            "title" => ["required"],
            "text" => ["required"],
            "icon" => ["required"],
        ]);

        $feature->title = $request->title;
        $feature->text = $request->text;
        $feature->icon = $request->icon;
        $feature->save();

        return redirect()->route('dashboard')->with('success', 'Modifications enregistrées');
    }
}
