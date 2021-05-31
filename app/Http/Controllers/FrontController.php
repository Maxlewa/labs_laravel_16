<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $video = Video::find(1);
        return view('home', compact('video'));
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
        return view('pages.services');
    }
}
