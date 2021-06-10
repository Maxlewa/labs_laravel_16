<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\VideoController;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Genre;
use App\Models\Image;
use App\Models\Job;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

/* _____________________________ FRONT _____________________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog-post/{id}', [FrontController::class, 'showArticle'])->name('blog-post');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/services', [FrontController::class, 'services'])->name('services');

// LOGO Resize *

// Route::post('/image-resize', [LogoController::class, 'imgResize'])->name('img-resize');

// MAIL * Newsletter, Contact

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');
Route::post('/mail', [ContactMailController::class, 'store'])->name('mail-contact');

// BLOG-SEARCH *

Route::get('/search', [FrontController::class,'search'])->name('search'); 


/* _____________________________ BACK _____________________________ */


// _______ STORE Comment *

Route::post('/comment/store/{id}', [CommentController::class, 'store'])->name('commentStore');

/* ---------------------- C R U D ---------------------- */

// Users

Route::get('/admin/user/create', [UserController::class, 'create'])->name('userCreate');
Route::post('/admin/user/store', [UserController::class, 'store'])->name('userStore');
Route::get('/admin/user/{user}/edit', [UserController::class, 'edit'])->name('userEdit');
Route::put('/admin/user/{user}/update', [UserController::class, 'update'])->name('userUpdate');
Route::delete('/admin/user/{user}/delete', [UserController::class,'destroy'])->name('userDestroy');

// Images carousel

Route::get('/admin/image/create', [ImageController::class, 'create'])->name('imageCreate');
Route::post('/admin/image/store', [ImageController::class, 'store'])->name('imageStore');
Route::get('/admin/image/{image}/edit', [ImageController::class, 'edit'])->name('imageEdit');
Route::put('/admin/image/{image}/update', [ImageController::class, 'update'])->name('imageUpdate');
Route::delete('/admin/image/{image}/delete', [ImageController::class,'destroy'])->name('imageDestroy');

// Logo

Route::get('/admin/logo/{logo}/edit', [LogoController::class, 'edit'])->name('logoEdit');
Route::put('/admin/logo/{logo}/update', [LogoController::class, 'update'])->name('logoUpdate');

// Services

Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('serviceCreate');
Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('serviceStore');
Route::get('/admin/service/{service}/edit', [ServiceController::class, 'edit'])->name('serviceEdit');
Route::put('/admin/service/{service}/update', [ServiceController::class, 'update'])->name('serviceUpdate');
Route::delete('/admin/service/{service}/delete', [ServiceController::class,'destroy'])->name('serviceDestroy');

// Titles

Route::get('/admin/title/{title}/edit', [TitleController::class, 'edit'])->name('titleEdit');
Route::put('/admin/title/{title}/update', [TitleController::class, 'update'])->name('titleUpdate');

// Discover

Route::get('/admin/discover/{discover}/edit', [DiscoverController::class, 'edit'])->name('discoverEdit');
Route::put('/admin/discover/{discover}/update', [DiscoverController::class, 'update'])->name('discoverUpdate');

// Video

Route::get('/admin/video/{video}/edit', [VideoController::class, 'edit'])->name('videoEdit');
Route::put('/admin/video/{video}/update', [VideoController::class, 'update'])->name('videoUpdate');

// Testimonials

Route::get('/admin/testimonial/create', [TestimonialController::class, 'create'])->name('testimonialCreate');
Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])->name('testimonialStore');
Route::get('/admin/testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonialEdit');
Route::put('/admin/testimonial/{testimonial}/update', [TestimonialController::class, 'update'])->name('testimonialUpdate');
Route::delete('/admin/testimonial/{testimonial}/delete', [TestimonialController::class,'destroy'])->name('testimonialDestroy');

// Contact

Route::get('/admin/contact/{contact}/edit', [ContactController::class, 'edit'])->name('contactEdit');
Route::put('/admin/contact/{contact}/update', [ContactController::class, 'update'])->name('contactUpdate');

// Articles blog

Route::get('/admin/post/create', [PostController::class, 'create'])->name('postCreate');
Route::post('/admin/post/store', [PostController::class, 'store'])->name('postStore');
Route::get('/admin/post/{post}/edit', [PostController::class, 'edit'])->name('postEdit');
Route::put('/admin/post/{post}/update', [PostController::class, 'update'])->name('postUpdate');
Route::delete('/admin/post/{post}/delete', [PostController::class,'destroy'])->name('postDestroy');

// Google Maps

Route::get('/admin/map/{map}/edit', [MapController::class, 'edit'])->name('mapEdit');
Route::put('/admin/map/{map}/update', [MapController::class, 'update'])->name('mapUpdate');

// Features - Smartphone - Left/Right

Route::get('/admin/feature/{feature}/edit', [FeatureController::class, 'edit'])->name('featureEdit');
Route::put('/admin/feature/{feature}/update', [FeatureController::class, 'update'])->name('featureUpdate');

// Tags

Route::get('/admin/tag/create', [TagController::class, 'create'])->name('tagCreate');
Route::post('/admin/tag/store', [TagController::class, 'store'])->name('tagStore');
Route::get('/admin/tag/{tag}/edit', [TagController::class, 'edit'])->name('tagEdit');
Route::put('/admin/tag/{tag}/update', [TagController::class, 'update'])->name('tagUpdate');
Route::delete('/admin/tag/{tag}/delete', [TagController::class,'destroy'])->name('tagDestroy');

// Categories

Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('categoryCreate');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('categoryStore');
Route::get('/admin/category/{category}/edit', [CategoryController::class, 'edit'])->name('categoryEdit');
Route::put('/admin/category/{category}/update', [CategoryController::class, 'update'])->name('categoryUpdate');
Route::delete('/admin/category/{category}/delete', [CategoryController::class,'destroy'])->name('categoryDestroy');

// Footer

Route::get('/admin/footer/{footer}/edit', [FooterController::class, 'edit'])->name('footerEdit');
Route::put('/admin/footer/{footer}/update', [FooterController::class, 'update'])->name('footerUpdate');

// ___________________________________ DASHBOARD *

Route::get('/dashboard', function () {
    $users = User::all();
    $logo = Logo::find(1);
    return view('dashboard', compact('users', 'logo'));
})->middleware(['auth'])->name('dashboard');

// Dashboard - GENERAL

Route::get('/dashboard/general', function () {
    // $this->authorize('isAdmin');
    $logo = Logo::find(1);
    $footer = Footer::find(1);
    return view('admin.pages.general', compact('logo', 'footer'));
})->middleware(['auth'])->name('adminGeneral');

// Dashboard - DISCOVER

Route::get('/dashboard/discover', function () {
    // $this->authorize('isAdmin');
    $video = Video::find(1);
    $title = Title::all();
    $discover = Discover::find(1);
    return view('admin.pages.discover', compact('video', 'title', 'discover'));
})->middleware(['auth'])->name('adminDiscover');

// Dashboard - TESTIMONIALS

Route::get('/dashboard/testimonials', function () {
    // $this->authorize('isAdmin');
    $testimonials = Testimonial::all();
    $title = Title::all();
    return view('admin.pages.testimonial', compact('testimonials', 'title'));
})->middleware(['auth'])->name('adminTestimonial');

// Dashboard - CONTACT

Route::get('/dashboard/contact', function () {
    // $this->authorize('isAdmin');
    $contact = Contact::find(1);
    $map = Map::find(1);
    return view('admin.pages.contact', compact('contact', 'map'));
})->middleware(['auth'])->name('adminContact');

// Dashboard - SERVICES

Route::get('/dashboard/services', function () {
    // $this->authorize('isAdmin');
    $services = Service::all();
    $title = Title::all();
    return view('admin.pages.services', compact('services', 'title'));
})->middleware(['auth'])->name('adminServices');

// Dashboard - FEATURES

Route::get('/dashboard/features', function () {
    // $this->authorize('isAdmin');
    $features = Feature::all();
    $title = Title::all();
    return view('admin.pages.features', compact('features', 'title'));
})->middleware(['auth'])->name('adminFeatures');

// Dashboard - CAROUSEL

Route::get('/dashboard/carousel', function () {
    // $this->authorize('isAdmin');
    $images = Image::all();
    return view('admin.pages.carousel', compact('images'));
})->middleware(['auth'])->name('adminCarousel');

// Dashboard - BLOG

Route::get('/dashboard/blog', function () {
    // $this->authorize('isWriter');
    $posts = Post::all()->where('trash', 0);
    return view('admin.pages.blog', compact('posts'));
})->middleware(['auth'])->name('adminBlog');

// Dashboard - TAG/CATEGORY

Route::get('/dashboard/tag-category', function () {
    $tags = Tag::all();
    $categories = Category::where('id', '!=', 5)->get();
    return view('admin.pages.tag-category', compact('tags', 'categories'));
})->middleware(['auth'])->name('adminTagCategory');

// Dashboard - VALIDATE

Route::get('/admin/validate', [ValidationController::class, 'index'])->middleware(['auth'])->name('adminValidate');

// Valider un membre
Route::put('/admin/validation/member/update/{id}', [ValidationController::class, 'updateUser'])->name('validateUserUpdate');
// Supprimer un membre non-validé
Route::delete('/admin/validate/user/{id}/delete', [ValidationController::class,'deleteUser'])->name('validateDeleteUser');

// Valider un article
Route::put('/admin/validate/update/{id}', [ValidationController::class, 'updateArticle'])->name('validateUpdateArticle');
// Déplacer un article dans la corbeille
Route::put('/admin/trash/article/{id}/', [TrashController::class,'trashArticle'])->name('trashArticle');
// Récupérer un article de la corbeille
Route::put('/admin/recup/article/{id}/', [TrashController::class,'recupArticle'])->name('recupArticle');
// Supprimer un commentaire non-validé
Route::delete('/admin/validate/comment/{id}/delete', [ValidationController::class,'deleteComment'])->name('validateDeleteComment');

// Commentaires
Route::post('/blog/article/{id}/comment', [CommentController::class, "store"])->name('commentStore');
// Valider un commentaire
Route::put('/admin/validation/update/{id}', [CommentController::class, 'update'])->name('commentUpdate');

// Dashboard - TRASH

Route::get('/admin/trash', [TrashController::class, 'index'])->middleware(['auth'])->name('adminTrash');

// Supprimer un article de la corbeille définitivement
Route::delete('/admin/trash/article/{id}/delete', [TrashController::class,'deleteArticle'])->name('deleteArticle');


require __DIR__.'/auth.php';
