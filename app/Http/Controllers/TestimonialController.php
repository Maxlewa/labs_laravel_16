<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonials = Testimonial::all();
        return view('admin.services.serviceCreate', compact('testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "firstname" => ["required"],
            "name" => ["required"],
            "text" => ["required"],
            "job" => ["required"],
            "image" => ["required"],
        ]);

        $testimonial = new Testimonial();
        $testimonial->firstname = $request->firstname;
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->job = $request->job;
        $testimonial->image = $request->image;
        $testimonial->save();

        return redirect()->route('admin.adminHome')->with('success', $request->title . ' a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.testimonialEdit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        request()->validate([
            "firstname" => ["required"],
            "name" => ["required"],
            "text" => ["required"],
            "job" => ["required"],
            "image" => ["required"],
        ]);

        $testimonial->firstname = $request->firstname;
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->job = $request->job;
        $testimonial->image = $request->image;
        $testimonial->save();

        return redirect()->route('admin.adminHome')->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.adminHome');
    }
}
