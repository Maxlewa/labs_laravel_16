<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    // EDIT Title

    public function edit(Title $title) {

        return view('admin.titles.titleEdit', compact('title'));
    }

    // UPDATE Title

    public function update(Request $request, Title $title) {

        request()->validate([
            "titleHome1" => ["required"],
            "titleHome2" => ["required"],
            "titleHome3" => ["required"],
            "titleHome4" => ["required"],
            "titleServices1" => ["required"],
            "titleServices2" => ["required"],
        ]);

        $title->titleHome1 = $request->titleHome1;
        $title->titleHome2 = $request->titleHome2;
        $title->titleHome3 = $request->titleHome3;
        $title->titleHome4 = $request->titleHome4;
        $title->titleServices1 = $request->titleServices1;
        $title->titleServices2 = $request->titleServices2;
        $title->save();

        return redirect()->route('admin.adminHome')->with('success', 'Modifications enregistrées');
    }
}
