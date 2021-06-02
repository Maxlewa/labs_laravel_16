<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Feature;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Service;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $video = Video::find(1);
        $services9 = Service::inRandomOrder()->limit(9)->get();
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $discovers = Discover::all();
        $images = Image::all();
        $logo = Logo::find(1);
        $title = Title::find(1);
        return view('home', compact('video', 'services9', 'services3', 'discovers', 'images', 'logo', 'title'));
    }
    public function blog() {
        $logo = Logo::find(1);
        return view('pages.blog', compact('logo'));
    }
    public function blogpost() {
        $logo = Logo::find(1);
        return view('pages.blog-post', compact('logo'));
    }
    public function contact() {
        $map = Map::find(1);
        $logo = Logo::find(1);
        return view('pages.contact', compact('map', 'logo'));
    }
    public function services() {
        $services = Service::paginate(9)->fragment('servicePaginate');
        $featuresLeft = Feature::where('id', "<", 4)->get();
        $featuresRight = Feature::where('id', ">", 3)->get();
        $logo = Logo::find(1);
        $title = Title::find(1);
        return view('pages.services', compact('services', 'featuresLeft', 'featuresRight', 'logo', 'title'));
    }
    public function newsletter() {
        $logo = Logo::find(1);
        return view('mail.newsletter', compact('logo'));
    }
}
