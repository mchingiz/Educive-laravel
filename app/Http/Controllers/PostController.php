<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Http\uploadedFile;

use Auth;
use DB;
use App\Http\Requests;
use App\Post;
use App\User;
use App\Company;
use App\Menu;
use App\Submenu;
use App\Tag;

class PostController extends Controller
{
	private $user;
	private $menu;
	private $submenu;
	private $tags;

	public function __construct(){
		$this->middleware('auth');
		$this->user = Auth::user();
		if($this->user->type != 'admin' ){
			$this->middleware('moderator', ['only' => ['allposts','editByModerator','updateByModerator','deleteCheckByModerator','deleteByModerator','approve']]);
		}
		if($this->user->type != 'moderator' ){
			$this->middleware('admin', ['only' => ['allposts','editByModerator','updateByModerator','deleteCheckByModerator','deleteByModerator','approve']]);
		}
		$this->middleware('company', ['only' => ['userPosts','add','store','edit','update','deleteCheck','delete','publish','unpublish']]);


		$this->menu = Menu::all();
		$this->submenu = Submenu::all();
		$this->tags = Tag::all();
		view()->share('menu', $this->menu);
		view()->share('submenu', $this->submenu);
		view()->share('user', $this->user);
		view()->share('tags', $this->tags);
	}

	// Methods for users

	public function userPosts(){
		$posts = $this->user->posts->all();
		return view('post.posts', compact('posts'));
	}

	public function add(){
		return view('post.add');
	}

	public function store(Request $request){

		$this->validate($request,[
			'title' => 'required|min:10|max:150',
			'body' => 'required|min:5',
			'image' => 'required|mimes:jpeg,bmp,png|max:2000',
			'image' => 'required|mimes:jpeg,bmp,png|max:2000',
			'category' => 'required',
			'tags' => 'required|min:1|max:5'
		]);

		$newPost = new Post;

		$photo = $request -> file('image');

		$targetLocation = base_path() . '/public/postimages/';
		$targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();

		$photo->move($targetLocation, $targetName);

		$url = '/postimages/'.$targetName;

		// Get beginning DateTime of the event
		$startsAt = $request->startsAt;
		$startsAtDate = substr($startsAt,0,10);
		$startsAtTime = substr($startsAt,11,14).":00";
		$startsAt = $startsAtDate.' '.$startsAtTime;

		// Get end DateTime of the event
		$endsAt = $request->endsAt;
		$endsAtDate = substr($endsAt,0,10);
		$endsAtTime = substr($endsAt,11,14).":00";
		$endsAt = $endsAtDate.' '.$endsAtTime;

		$example = Carbon::create(2016,05,03,13,15,16);

		$this->user->posts()->create([
			'title' => $request->title,
			'body' => $request->body,
			'deadline' => $request->deadline,
			'image' => $url,
			'category_id' => $request->category,
			'starts_at' => $example,
			'ends_at' => $endsAt,
			'slug' =>  str_replace(" ","-",$request->title),
			]);

		$tags = $request->tags;

		$currentPostID = $this->user->posts()->orderBy('id', 'desc')->first()->id;

		foreach( $tags as $tag){
			DB::table('post_tag')->insert(['post_id' => $currentPostID, 'tag_id' => $tag, 'created_at' => Carbon::now()]);
		}

		return redirect('/posts');
	}

	public function edit(Post $post){
		if($this->user->id == $post->user->id){
			return view('post.edit',compact('post'));
		}else{
			return "You don't have permission";
		}
	}

	public function update(Request $request, Post $post){
		$this->validate($request,[
			'title' => 'required|min:10|max:150',
			'body' => 'required|min:5',
			'image' => 'mimes:jpeg,bmp,png|max:2000',
			'category' => 'required'
		]);
		$post->update([
					'title' => $request->title,
					'body' => $request->body,
					'deadline' => $request->deadline,
					'category_id' => $request->category,
				]);
		if( $request->file('image') ){
			$newPost = new Post;

			$photo = $request -> file('image');

			$targetLocation = base_path() . '/public/postimages/';
			$targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();

			$photo->move($targetLocation, $targetName);

			$url = '/postimages/'.$targetName;

			$post->update([
				'image' => $url,
			]);
		}

		return redirect('/posts');
	}

	public function deleteCheck(Post $post){
		if($this->user->id == $post->user->id){
			return view('post.delete');
		}else{
			return "You don't have permission";
		}
	}


	public function delete(Post $post){
		$post->delete();
		return redirect('/posts/');
	}

	public function unpublish(Post $post){
		if($this->user->id == $post->user->id){
			$post -> published = 0;
			$post -> save();
			return back();
		}else{
			return "You don't have permission";
		}
	}

	public function publish(Post $post){
		if($this->user->id == $post->user->id){
			$post -> published = 1;
			$post -> save();
			return back();
		}else{
			return "You don't have permission";
		}
	}

	// Methods for moderators

	public function approve(Post $post){
		$post -> approved = 1;
		$post -> save();
		return back();
	}

	public function refuse(Post $post){
		$post -> approved = 0;
		$post -> save();
		return back();
	}

	public function editByModerator(Post $post){
		return view('administration.edit',compact('post'));
	}

	public function updateByModerator(Request $request, Post $post){
		$this->validate($request,[
			'title' => 'required|min:10|max:150',
			'body' => 'required|min:5',
			'image' => 'mimes:jpeg,bmp,png|max:2000',
			'category' => 'required'
		]);

		$post->update([
			'title' => $request->title,
			'body' => $request->body,
			'deadline' => $request->deadline,
			'category_id' => $request->category,
		]);

		if( $request->file('image') ){
			$newPost = new Post;

			$photo = $request -> file('image');

			$targetLocation = base_path() . '/public/postimages/';
			$targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();

			$photo->move($targetLocation, $targetName);

			$url = '/postimages/'.$targetName;

			$post->update([
				'image' => $url,
			]);
		}

		return redirect('/waitlist');
	}

	public function deleteCheckByModerator(){
		return view('administration.delete');}

	public function deleteByModerator(Post $post){
		$post->delete();
		return redirect('/waitlist/');
	}

}//End of class
