<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

use Auth;
use App\User;
use App\Post;
use App\Company;
use App\Menu;
use DB;

class UserController extends Controller
{
	private $user;

	public function __construct(){
		$this->middleware('auth');
		$this->user = Auth::user();
		if($this->user->type == 'user'){
			$this->middleware('user', ['only' => ['follow','unfollow']]);
		}else{
			$this->middleware('admin');
		}

		$menus=Menu::all();
		view()->share('menus', $menus);
		view()->share('user', $this->user);
	}

	public function makeUser(User $user){
		$user->type = 'user';
		$user->save();
		return back();
	}

	public function makeModerator(User $user){
		$user->type = 'moderator';
		$user->save();
		return back();
	}

	public function makeAdmin(User $user){
		$user->type = 'admin';
		$user->save();
		return back();
	}

	public function delete(User $user){
		if($user->type == 'admin'){
			return 'Can not be deleted';
		}
		$user->delete();
		return back();
	}

	public function follow(User $user, Company $company){
		DB::table('followers')->insert(['user_id' => $this->user->id, 'follow_id' => $company->id, 'created_at' => Carbon::now()]);
		return back();
	}

	public function unfollow(User $user, Company $company){
		DB::table('followers')->where('user_id', '=', $this->user->id)->where('follow_id', '=', $company->id)->delete();
		return back();
	}

	public function myFollowings(){
		$followings = $this->user->following()->get();
		$noFollower = $this->user->following()->get()->all();

		return view('user.following',compact('followings','noFollower'));
	}

	public function deleteMeCheck(){
		return view('user.deleteMeCheck');
	}

	public function deleteMe(Request $request,User $user){
		$user->delete();
		return redirect('/');
	}
}
