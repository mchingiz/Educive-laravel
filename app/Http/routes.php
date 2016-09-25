<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Post;
use App\User;
use App\Tag;
use App\Category;
use App\Company;

Route::get('/', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/showuser/{id}', function ($id) {
    $user=User::find($id);
    return $user->posts;
});

Route::get('/showtext/{id}', function ($id) {
    $post=Post::find($id);
    return $post->user;
});

Route::get('/showtexttag/{id}', function ($id) {
    $post=Post::find($id);
    return $post->tags;
});

Route::get('/showtag/{id}', function ($id) {
    $tag=Tag::find($id);
    return $tag->posts;
});

Route::get('/showtextcat/{id}', function ($id) {
  $post=Post::find($id);
  return $post->categories;
});

Route::get('/showcat/{id}', function ($id) {
    $cat=Category::find($id);
    return $cat->posts;
});

Route::get('/company/{id}', function ($id) {
    $com=Company::find($id);
    return $com->user;
});

Route::get('/usercompany/{id}', function ($id) {
    $user=User::find($id);
    return $user->company;
});

Route::get('/follower/{id}', function ($id) {
    $user=User::find($id);
    return $user->followers;
});

Route::get('/following/{id}', function ($id) {
    $user=User::find($id);
    return $user->following;
});
