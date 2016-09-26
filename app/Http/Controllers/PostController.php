<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\uploadedFile;

use Auth;
use App\Http\Requests;
use App\Post;
use App\User;

class PostController extends Controller
{
	private $user;

	public function __construct(){
		$this->user = Auth::user();
	}

	public function allposts(){
		$posts = $this->user->posts->all();
		return view('post.posts', compact('posts'));
	}

	public function store(Request $request){
		$this->validate($request,[
			'title' => 'required|min:10|max:150',
			'body' => 'required|min:5|',
			'image' => 'required',
			'deadline' => 'required'
		]);

		$newPost = new Post;

		$photo = $request -> file('image');

		$targetLocation = base_path() . '/public/postimages/';
		$targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();

		$photo->move($targetLocation, $targetName);

		$url = '/postimages/'.$targetName;

		$this->user->posts()->create([
			'title' => $request->title,
			'body' => $request->body,
			'deadline' => $request->deadline,
			'image' => $url
			]);

		return redirect('/allposts');
	}

	public function edit(Post $post){
		return view('post.edit',compact('post'));
	}

	public function update(Request $request, Post $post){
		$post->update([
			'title' => $request->title,
			'body' => $request->body,
			'deadline' => $request->deadline
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

		return back();
	}

	public function editByModerator(Post $post){
		return view('moderator.edit',compact('post'));
	}

	public function updateByModerator(Request $request, Post $post){
		$post->update([
			'title' => $request->title,
			'body' => $request->body,
			'deadline' => $request->deadline
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


	public function deleteCheck(){
		return view('post.delete');}

	public function delete(Post $post){
		$post->delete();
		return redirect('/allposts/');
	}


	public function deleteCheckByModerator(){
		return view('moderator.delete');}

	public function deleteByModerator(Post $post){
		$post->delete();
		return redirect('/waitlist/');
	}

	public function unpublish(Post $post){
		$post -> published = 0;
		$post -> save();
		return back();
	}

	public function publish(Post $post){
		$post -> published = 1;
		$post -> save();
		return back();
	}

	public function waitlist(){
		$posts = Post::where([
				['approved', '=', '0'],
				['published', '=', '1'],
			])->get();
		$isEmpty=$posts->toArray();
		return view('moderator.waitlist',compact('posts','isEmpty'));
	}

	public function approve(Post $post){
		$post -> approved = 1;
		$post -> save();
		return back();
	}
}
