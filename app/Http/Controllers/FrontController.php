<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
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
