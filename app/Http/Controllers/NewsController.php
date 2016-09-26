<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{

 public function show(Post $post){
 	$teqler=$post->tags;

 	return view('news', compact('post','teqler'));


 }
}
