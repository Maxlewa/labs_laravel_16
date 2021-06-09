<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index()
    {
        // $users = User::where('validate', 0)->get();
        $roles = Role::all();
        // $commentaires = Comment::all();
        $commentaires = Comment::where('validate', 0)->get();
        $articles = Post::where('validate', 0)->where('trash', 0)->get();
        // $articles = Article::all();
        return view('admin.pages.validate', compact('roles','commentaires','articles'));
    }

    // public function update(Request $request, User $id)
    // {
    //     $user = $id;
    //     $user->role_id = $request->role;
    //     $user->validate = 1;
    //     $user->save();
    //     return redirect()->back();
    // }

    public function updateCommentaire(Comment $id)
    {
        $commentaire = $id;
        $commentaire->validate = 1;
        $commentaire->save();
        return redirect()->back()->with('success', 'Commentaire validé');
    }

    public function deleteComment(Comment $id)
    {
        $commentaire = $id;
        $commentaire->delete();
        return redirect()->back()->with('success', 'Commentaire supprimé');
    }

    public function updateArticle(Post $id)
    {
        $post = $id;
        $post->validate = 1;
        $post->save();
        return redirect()->back()->with('success', 'Article validé');
    }

}
