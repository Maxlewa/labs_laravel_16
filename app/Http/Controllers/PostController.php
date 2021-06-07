<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
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
        $posts = Post::all();
        return view('admin.posts.postCreate', compact('posts'));
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
            "title" => ["required"],
            "text" => ["required"],
            "image" => ["required"],
            "user_id" => ["required"],
            "category_id" => ["required"],
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->image = $request->image;
        $post->dateDay = date("d");
        $post->dateMonth = date("M");
        $post->dateyear = date("Y");
        $post->user_id = $request->user_id;
        $post->category_id = $request->category_id;
        $post->validate = 0;
        $post->save();

        return redirect()->route('dashboard')->with('success', 'Votre article "' . $request->title . '" a bien été envoyé et est attente de validation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.postEdit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            "title" => ["required"],
            "text" => ["required"],
            "image" => ["required"],
            "user_id" => ["required"],
            "category_id" => ["required"],
        ]);

        $post->title = $request->title;
        $post->text = $request->text;
        $post->image = $request->image;
        $post->dateDay = date("d");
        $post->dateMonth = date("M");
        $post->dateyear = date("Y");
        $post->user_id = $request->user_id;
        $post->category_id = $request->category_id;
        $post->validate = 0;
        $post->save();
        
        return redirect()->route('admin.adminHome')->with('success', 'Modifications enregistrées, en attente de validation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.adminHome');
    }
}
