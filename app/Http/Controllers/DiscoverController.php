<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    // EDIT Discover

    public function edit(Discover $discover) {

        return view('admin.discovers.discoverEdit', compact('discover'));
    }

    // UPDATE Discover

    public function update(Request $request, Discover $discover) {

        request()->validate([
            "text" => ["required"],
        ]);

        $discover->text = $request->text;
        $discover->save();

        return redirect()->route('dashboard')->with('success', 'Modifications enregistrées');
    }
}
