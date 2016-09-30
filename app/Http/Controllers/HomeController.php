<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;
use App\Company;
use App\Post;
use DB;


class HomeController extends Controller
{
	protected $user;

	public function __construct(){
		$menus=Menu::all();
		$this->user = Auth::user();
		view()->share('menus', $menus);
		view()->share('user', $this->user);
	}


	public function index(){
		return view('home');
	}

	public function mainpage(){
		$menus=Menu::all();
		return view('index');
		return view('index',compact('menus'));
	}

	public function company(Company $company){
		$posts = Post::where('user_id','=',$company->user_id)->get();
		
		$follow = DB::table('followers')->where('user_id','=', $this->user->id)->where('follow_id','=', $company->id)->count();
		return view('company',compact('company','posts','follow'));
	}
}
