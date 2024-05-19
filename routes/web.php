<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile', [
        "title_page" => "Profile",
        "name" => "Lambok hendrik",
        "email"=> "lamboksimatupang@gmail.com",
        "images" => "images/photo.jfif"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title_page" => "About"
    ]);
});
 

Route::get('/blog', [PostController::class, 'index']);

// Halaman single post 
Route::get('blog/{post:slug}', [PostController::class, 'cari']);

