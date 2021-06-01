<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/* ________________________ FRONT ________________________ */

Route::get('/', [FrontController::class, 'home']) -> name('home');
Route::get('/blog', [FrontController::class, 'blog']) -> name('blog');
Route::get('/blog-post', [FrontController::class, 'blogpost']) -> name('blog-post');
Route::get('/contact', [FrontController::class, 'contact']) -> name('contact');
Route::get('/services', [FrontController::class, 'services']) -> name('services');

/* ________ LOGO RESIZE */

// Route::get('/', [LogoController::class, 'index']);
Route::post('/image-resize', [LogoController::class, 'imgResize'])->name('img-resize');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
