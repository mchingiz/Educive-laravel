<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    public function math(){
    	
    	$categories=Category::findOrFail(1);
    	$posts= $categories->posts;
    	
    	
    	
        return view('category', compact('posts'));

    }
}
