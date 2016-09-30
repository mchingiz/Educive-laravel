<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;
use App\Company;
use App\Post;
use DB;
use App\Category;


class HomeController extends Controller
{
	protected $user;

	public function __construct(){
		$menus=Menu::all();
		$this->user = Auth::user();
		view()->share('menus', $menus);
		view()->share('user', $this->user);
	}

    public function index()
    {
        return view('home');
    }

    public function mainpage()
    { $menus=Menu::all();
      return view('index');
        return view('index',compact('menus'));
    }
    public function contact()
    {
      return view('contact');
    }
    public function showPost($slug)
    { $post=Post::where('slug','=',$slug)->get();
      $post=$post[0];
      return view('news',compact('post'));
    }

    public function showCategory($menu ,$submenu){
      $cat=Category::where('name','=',$submenu)->get();
      $cat=$cat[0];
      $posts=$cat->posts;
      return view('category',compact('posts'));
    }
    public function showCategoryMenu($menu){
      $menu=Menu::where('name','=',$menu)->get();
      $menu=$menu[0];
      $k=0;$i=0;
      foreach($menu->submenus as $submenu){
        $cat[$k]=$submenu->category;

        foreach( $cat[$k]->posts as $post){
          $posts[$i++]=$post;
        }
        $k++;
      }
      return view('category',compact('posts'));
    }

	public function company(Company $company){
		$posts = Post::where('user_id','=',$company->user_id)->get();

		$follow = DB::table('followers')->where('user_id','=', $this->user->id)->where('follow_id','=', $company->id)->count();
		return view('company',compact('company','posts','follow'));
	}
}
