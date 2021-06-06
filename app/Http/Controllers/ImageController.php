<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    // EDIT Image

    public function edit(Image $image) {

        return view('admin.images.imageEdit', compact('image'));
    }

    // UPDATE Image

    public function update(Request $request, Image $image) {

        request()->validate([
            "name" => ["required"],
        ]);

        $image->name = $request->name;
        $image->save();

        return redirect()->route('admin.adminHome')->with('success', 'Modifications enregistrées');
    }
}
