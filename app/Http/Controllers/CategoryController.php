<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Category;
use App\Post;
use App\Menu;


class CategoryController extends Controller
{
	private $user;

	public function __construct(){
		$this->user = Auth::user();
		$menus = Menu::all();
		view()->share('menus',$menus);
		view()->share('user',$this->user);
	}
    public function math(){


    	$categories=Category::findOrFail(1);
    	$posts= $categories->posts;








    	$posts=Post::all();




        return view('category', compact('posts'));

    }


     public function mysearch(Request $request){


    	$posts=Post::where('title','LIKE', '%'.$request->search.'%')
									->orWhere('body', 'LIKE', '%'.$request->search.'%')
									->get();

    	return view('category', compact('posts'));


    }



}
