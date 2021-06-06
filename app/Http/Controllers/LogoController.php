<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Logo;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{

     // EDIT Logo

     public function edit(Logo $logo) {

        return view('admin.logos.logoEdit', compact('logo'));
    }

    // UPDATE Logo

    public function update(Request $request, Logo $logo) {

        request()->validate([
            "name" => ["required"],
        ]);

        $logo->name = $request->name;
        $logo->save();

        return redirect()->route('admin.adminHome')->with('success', 'Modifications enregistrées');
    }

    /**
     * Init view.
     */
    // public function index()
    // {
    //     return view('welcome');
    // }
  
    /**
     * Image resize
     */
    // public function imgResize(Request $request) {

    //     $this->validate($request, [
    //         'name' => 'required',
    //         'imgFile' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    //     ]);
  
    //     $image = $request->file('imgFile');
    //     $input['imagename'] = time().'.'.$image->extension();
     
    //     $filePath = public_path('/thumbnails');

    //     $img = Logo::make($image->path());
    //     $img->resize(110, 110, function ($const) {
    //         $const->aspectRatio();
    //     })->save($filePath.'/'.$input['imagename']);
   
    //     $filePath = public_path('/images');
    //     $image->move($filePath, $input['imagename']);
   
    //     return back()
    //         ->with('success','Image uploaded')
    //         ->with('fileName',$input['imagename']);
    // }
}
