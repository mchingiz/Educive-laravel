<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    public function math(){
    	
    	$categories=Category::findOrFail(1);
    	$posts= $categories->posts;
    	
    	
    	
    	
    	
    	
        return view('category', compact('posts'));
        
    }
    

     public function mysearch(Request $request){
 
    	
    	$posts=Post::where('title','LIKE', '%'.$request->search.'%')->orWhere('body', 'LIKE', '%'.$request->search.'%')->get();
    
    	return view('category', compact('posts'));
        
        
    }
	
    	
   
}