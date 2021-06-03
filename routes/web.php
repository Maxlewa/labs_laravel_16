<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/* _____________________________ FRONT _____________________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/blog', [FrontController::class, 'blog'])->name('blog');

Route::get('/blog-post/{id}', [FrontController::class, 'showArticle'])->name('blog-post');
// Route::get('/blog-post/{post}', [PostController::class, 'show'])->name('blog-post');


Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/services', [FrontController::class, 'services'])->name('services');

// ________ LOGO Resize *

Route::post('/image-resize', [LogoController::class, 'imgResize'])->name('img-resize');

// ________ MAIL *

// Newsletter

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');

// Contact

Route::post('/mail', [ContactController::class, 'store'])->name('mail-contact');


/* _____________________________ BACK _____________________________ */


// _______ STORE Comment *

Route::post('/comment/store', [CommentController::class, 'store'])->name('commentStore');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
