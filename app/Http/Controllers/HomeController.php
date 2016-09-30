<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;
use App\Category;
use App\Post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $menus=Menu::all();
        view()->share('menus', $menus);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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

}
