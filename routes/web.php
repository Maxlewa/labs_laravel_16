<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

/* ________________________ FRONT ________________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog-post', [FrontController::class, 'blogpost'])->name('blog-post');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/services', [FrontController::class, 'services'])->name('services');

// ___________ LOGO RESIZE *

// Route::get('/', [LogoController::class, 'index']);
Route::post('/image-resize', [LogoController::class, 'imgResize'])->name('img-resize');

// ___________ NEWSLETTER *

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');

// ___________ CONTACT FORM MAIL *

Route::post('/mail', [ContactController::class, 'store'])->name('contact');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
