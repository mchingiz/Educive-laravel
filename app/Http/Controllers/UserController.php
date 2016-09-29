<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\User;
use App\Post;

class UserController extends Controller
{
	private $user;

	public function __construct(){
		$this->middleware('auth');
		$this->user = Auth::user();
		$this->middleware('admin');
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
}
