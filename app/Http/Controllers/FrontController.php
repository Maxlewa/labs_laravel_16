<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $video = Video::find(1);
        $services9 = Service::inRandomOrder()->limit(9)->get();
        $services3 = Service::inRandomOrder()->limit(3)->get();
        return view('home', compact('video', 'services9', 'services3'));
    }
    public function blog() {
        return view('pages.blog');
    }
    public function blogpost() {
        return view('pages.blog-post');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function services() {
        $services = Service::paginate(9)->fragment('servicePaginate');
        return view('pages.services', compact('services'));
    }
}
