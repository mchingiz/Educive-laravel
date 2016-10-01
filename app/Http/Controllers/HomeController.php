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
    { 	$trendingPosts= DB::table('posts')
                ->orderBy('count', 'desc')
								->limit(8)
                ->get();
				$editorChoices = DB::table('posts')
									->where('approved', '=', 1)
									->where('published', '=', 1)
									->inRandomOrder()
									->limit(6)
									->get();
        return view('index',compact('trendingPosts','editorChoices'));
    }
    public function contact()
    {
      return view('contact');
    }
    public function showPost($slug)
    {
		 $post=Post::where('slug','=',$slug)->get();
      $post=$post[0];
			$post->count=$post->count+1;
			$post->update([
						'count' => $post->count+1,
					]);

			$trendingPosts= DB::table('posts')
		                ->orderBy('count', 'desc')
										->limit(6)
		                ->get();
			$otherPosts = DB::table('posts')
							        ->where('approved', '=', 1)
							        ->where('published', '=', 1)
											->inRandomOrder()
											->limit(5)
							        ->get();

			$authorPosts = DB::table('posts')
										->where('user_id', '=', $post->user_id)
										->where('published', '=', 1)
										->where('approved', '=', 1)
										->inRandomOrder()
										->limit(2)
										->get();
      return view('news',compact('post','trendingPosts','otherPosts','authorPosts'));
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
