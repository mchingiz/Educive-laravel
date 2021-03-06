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
use App\Menu;
use App\Submenu;

Route::get('/', 'HomeController@mainpage');
Route::get('/category', function () {
    return view('category');
 });

Route::get('/tags', function () {
    return view('tags');
 });
Route::get('/company/{company}', 'HomeController@company');
Route::get('/contact', 'HomeController@contact');
Route::get('/news/{id}', 'NewsController@show');

// User
Route::get('/myfollowings','UserController@myFollowings');
Route::get('/deleteMe/{user}','UserController@deleteMeCheck');
Route::post('/deleteMe/{user}','UserController@deleteMe');
Route::get('/contactus', 'HomeController@contact');

// Posts operations for users
	Route::get('/add','PostController@add');
	Route::get('/posts','PostController@userPosts');

	Route::post('/user/addpost','PostController@store');

	Route::get('/post/{post}','PostController@edit');
	Route::post('/post/{post}','PostController@update');
	Route::get('/post/delete/{post}/','PostController@deleteCheck');
	Route::post('/post/delete/{post}','PostController@delete');

	Route::post('/post/unpublish/{post}','PostController@unpublish');
	Route::post('/post/publish/{post}','PostController@publish');

// Moderator
	Route::get('/waitlist','AdminPanelController@waitlist');
	Route::post('/post/approve/{post}','PostController@approve');
	Route::get('/approved','AdminPanelController@approved');
	Route::post('/post/refuse/{post}','PostController@refuse');
	Route::get('/userlist','AdminPanelController@userlist');

	// Post operations for moderator
	Route::get('/post/editByModerator/{post}','PostController@editByModerator');
	Route::post('/post/editByModerator/{post}','PostController@updateByModerator');
	Route::get('/post/deleteByModerator/{post}/','PostController@deleteCheckByModerator');
	Route::post('/post/deleteByModerator/{post}','PostController@deleteByModerator');
//Menu
Route::get('/menu', 'MenuController@show');
Route::post('/menu', 'MenuController@create');
Route::post('{menu}/submenu', 'SubmenuController@create');
Route::get('/editmenu/{id}', 'MenuController@edit');
Route::get('/editsubmenu/{submenu}', 'SubmenuController@edit');
Route::post('/editmenu/{id}', 'MenuController@update');
Route::post('/editsubmenu/{submenu}', 'SubmenuController@update');
Route::get('/deletemenu/{id}', 'MenuController@delete');
Route::get('/deletesubmenu/{submenu}', 'SubmenuController@delete');

// Admin
	Route::get('/dashboard','AdminPanelController@dashboard');
	Route::get('/stats','AdminPanelController@stats');
	Route::get('/makeUser/{user}/','UserController@makeUser');
	Route::get('/makeModerator/{user}/','UserController@makeModerator');
	Route::get('/makeAdmin/{user}/','UserController@makeAdmin');
	Route::get('/deleteUser/{user}/','UserController@delete');

// Follow System
	Route::post('/follow/{user}/{company}','UserController@follow');
	Route::post('/unfollow/{user}/{company}','UserController@unfollow');

//register
Route::get('/register/company', 'Auth\AuthController@registerCompany');
Route::get('/register/user', 'Auth\AuthController@registerUser');
Route::auth();

 Route::get('/home', 'HomeController@index');

Route::get('/math','CategoryController@math');
Route::post('/math','CategoryController@mysearch');



Route::get('/companyedit/{company}','CompanyController@edit');

Route::post('/companyedit/{id}','CompanyController@update');

//Post
Route::get('/posts/{slug}','HomeController@showPost');
Route::get('/{menu}/{submenu}','HomeController@showCategory');
Route::get('/{menu}','HomeController@showCategoryMenu');
