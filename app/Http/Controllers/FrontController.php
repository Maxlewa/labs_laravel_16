<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Feature;
use App\Models\Map;
use App\Models\Service;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $video = Video::find(1);
        $services9 = Service::inRandomOrder()->limit(9)->get();
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $discovers = Discover::all();
        return view('home', compact('video', 'services9', 'services3', 'discovers'));
    }
    public function blog() {
        return view('pages.blog');
    }
    public function blogpost() {
        return view('pages.blog-post');
    }
    public function contact() {
        $map = Map::find(1);
        return view('pages.contact', compact('map'));
    }
    public function services() {
        $services = Service::paginate(9)->fragment('servicePaginate');
        $featuresLeft = Feature::where('id', "<", 4)->get();
        $featuresRight = Feature::where('id', ">", 3)->get();
        return view('pages.services', compact('services', 'featuresLeft', 'featuresRight'));
    }
}
