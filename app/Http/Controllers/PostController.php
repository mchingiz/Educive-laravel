<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\uploadedFile;

use App\Http\Requests;
use App\Post;
use App\User;

class PostController extends Controller
{
	public function store(Request $request, User $user){
		// $this->validate($request,[
		// 	'title' => 'required|min:10|max:150',
		// 	'body' => 'required|min:5|',
		// 	// 'image' => 'required'
		// 	'deadline' => 'required'
		// ]);

		$newPost = new Post;

		$photo = $request -> file('image');

		$targetLocation = base_path() . '/public/postimages/';
		$targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();

		$photo->move($targetLocation, $targetName);

		$url = '/postimages/'.$targetName;

		$user->posts()->create([
			'title' => $request->title,
			'body' => $request->body,
			'deadline' => $request->deadline,
			'image' => $url
			] );

		return back();
	}

	public function edit(Post $post){
		return view('post.edit',compact('post'));
	}

	public function update(Request $request, Post $post){
		$post->update([
			'title' => $request->title,
			'body' => $request->body,
			'deadline' => $request->deadline,
		]);
		// $post->title = $request->title;
		// $post->body = $request->body;
		// $post->deadline = $request->deadline;

		if($request->file('image')){
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
}
