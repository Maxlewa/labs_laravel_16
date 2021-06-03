<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Service;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\Testimonial;
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
        $contact = Contact::find(1);
        $testimonials = Testimonial::all();
        $subjects = Subject::all();
        $footer = Footer::find(1);
        return view('home', compact('video', 'services9', 'services3', 'discovers', 'images', 'logo', 'title', 'contact', 'testimonials', 'subjects', 'footer'));
    }
    public function blog() {
        $logo = Logo::find(1);
        $articles = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        $footer = Footer::find(1);
        $comments = Comment::all();
        return view('pages.blog', compact('logo', 'articles', 'categories', 'tags', 'footer', 'comments'));
    }

    // public function blogpost() {
    //     $logo = Logo::find(1);
    //     $posts = Post::all();
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     $footer = Footer::find(1);
    //     return view('pages.blog-post', compact('logo', 'posts', 'categories', 'tags', 'footer'));
    // }

    // public function show(Post $id) {
    //     $post = $id;
    //     return view('pages.blog-post', compact('post')); 
    // }

    public function contact() {
        $map = Map::find(1);
        $logo = Logo::find(1);
        $contact = Contact::find(1);
        $subjects = Subject::all();
        $footer = Footer::find(1);
        return view('pages.contact', compact('map', 'logo', 'contact', 'subjects', 'footer'));
    }
    public function services() {
        $services = Service::paginate(9)->fragment('servicePaginate');
        $featuresLeft = Feature::where('id', "<", 4)->get();
        $featuresRight = Feature::where('id', ">", 3)->get();
        $logo = Logo::find(1);
        $title = Title::find(1);
        $posts3 = Post::inRandomOrder()->limit(3)->get();
        $subjects = Subject::all();
        $contact = Contact::find(1);
        $footer = Footer::find(1);
        return view('pages.services', compact('services', 'featuresLeft', 'featuresRight', 'logo', 'title', 'posts3', 'subjects', 'contact', 'footer'));
    }
    public function newsletter() {
        $logo = Logo::find(1);
        return view('mail.newsletter', compact('logo'));
    }

    public function showArticle(Post $id) {

        $article = $id;
        $logo = Logo::find(1);
        $categories = Category::all();
        $tags = Tag::all();
        $footer = Footer::find(1);

        $comments = Comment::where('post_id', $article->id)->where('validate', 1)->get();

        return view('pages.blog-post', compact('article', 'categories', 'tags', 'footer', 'logo', 'comments'));
    }
}
