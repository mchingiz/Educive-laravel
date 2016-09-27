<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Post;
use App\User;
use App\Company;

class AdminPanel extends Controller
{
	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
	}
   public function dashboard(){
   	$post = Post::all()->count();
		$notApproved = Post::where([
				['approved', '=', '0'],
			])->get()->count();

		$registration = User::all()->count();
		$user = User::where([
				['type', '=', 'user'],
			])->get()->count();
		$company = User::where([
				['type', '=', 'company'],
			])->get()->count();

		return  view('admin.dashboard',compact('post','notApproved','registration','user','company'));
   }
}
