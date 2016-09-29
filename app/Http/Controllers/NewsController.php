<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Menu;

class NewsController extends Controller
{
	public function __construct()
    {
        $menus=Menu::all();
        view()->share('menus', $menus);
    }

 public function show($post){
 	$post=Post::find($post);
 	$teqler=$post->tags;

 	return view('news', compact('post','teqler'));


 }
}
