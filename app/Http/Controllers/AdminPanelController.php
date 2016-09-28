<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Post;
use App\User;
use App\Company;

class AdminPanelController extends Controller
{
	protected $user;

	public function __construct(){
		$this->middleware('auth');
		$this->user = Auth::user();

		$this->middleware('admin',['only' => ['userlist']]);

		if($this->user->type != 'admin' ){
			$this->middleware('moderator', ['only' => ['dashboard','waitlist','approved']]);
		}

		$this->notApproved = Post::where([
				['approved', '=', '0'],
				['published', '=', '1'],
			])->get()->count();
	}

   public function dashboard(){
		$postCount = Post::all()->count();

		$viewCount = Post::sum('count');

		$registrationCount = User::all()->count();
		$userCount = User::where([
				['type', '=', 'user'],
			])->get()->count();
		$companyCount = User::where([
				['type', '=', 'company'],
			])->get()->count();


		$notApproved = $this->notApproved;
   	return  view('administration.dashboard',compact('postCount','notApproved','registrationCount','userCount','companyCount','viewCount'));
   }

   // public function sendVariables($view,$variables){
	// 	$postCount = $this->postCount;
	// 	$notApproved = $this->notApproved;
	// 	$registrationCount = $this->registrationCount;
	// 	$userCount = $this->userCount;
	// 	$companyCount = $this->companyCount;
   // 	return  view($view,compact($variables,'postCount','notApproved','registrationCount','userCount','companyCount'));
   // }



	public function waitlist(){
		$posts = Post::where([
				['approved', '=', '0'],
				['published', '=', '1'],
			])->get();
		$isEmpty=$posts->toArray();

		$notApproved = $this->notApproved;
		return view('administration.waitlist',compact('posts','isEmpty','notApproved'));
	}

	public function approved(){
		$posts = Post::where([
				['published', '=', '1'],
				['approved', '=', '1'],
			])->get();
		$isEmpty=$posts->toArray();

		$notApproved = $this->notApproved;
		return view('administration.approved',compact('posts','isEmpty','notApproved'));
	}

	public function userlist(){
		$users = User::all();

		$notApproved = $this->notApproved;
		return view('administration.userlist',compact('users','notApproved'));
	}
}
