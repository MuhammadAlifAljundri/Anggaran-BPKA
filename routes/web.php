<?php

use App\Http\Controllers\NewsController;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "name" => "Ariza Saputri",
        "email" => "m.alifaljundri@gmail.com",
        "image" => "bg2.jpg"
    ]);
});


Route::get('/news', [NewsController::class, 'index']);


// halaman single news
Route::get('news/{news:slug}', [NewsController::class, 'show']);


// Route::get('categories/{category:slug}', function(Category $category){
//     return view('category', [
//         "title" => $category->name,
//         'post' => $category->posts,
//         'category' => $category->name
//     ]);
// });


Route::get('/categories',function(){
    return view('categories', [
        "title" => "News Category",
        "categories" => Category::all()
    ]);
});


Route::get('/categories/{category:slug}',function(Category $category){
    return view('news', [
        "title" => "News By Category: $category->name",
        "posts" => $category->news->load('category', 'user'),
    ]);
});



Route::get('/authors/{user:username}', function(User $user) {
    return view('news', [
        'title' => "Post By Author:  $user->name",
        'posts' => $user->news->load('category', 'user')
    ]);
});