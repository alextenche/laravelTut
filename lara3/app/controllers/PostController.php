<?php

class PostController extends BaseController
{
	
	public function listing(){
		$posts = Post::where('title', 'LIKE', '%post%')->take(1)->skip(1)->get();
		return View::make('post.listing', compact('posts') );
	}

	public function single($id){
		$post = Post::find($id);
		return View::make('post.single')->with('post', $post);
	}

	public function update($id){
		dd($_POST);
	}
}