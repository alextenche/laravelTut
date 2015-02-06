<?php

class PostController extends BaseController
{
	
	public function listing(){
		$posts = Post::with('user')->get();
		return View::make('post.listing', compact('posts') );
	}

	public function single($id){
		$post = Post::find($id);
		return View::make('post.single')->with('post', $post);
	}

	public function insert(){
		// $post = new Post;
		// $post->title = 'A post from the insert method';
		// $post->body = 'Some random ghibberrish';
		// $post->save();

		$data = array(
			'title' => 'A post from the insert method, using the data array',
			'body' => 'Some random ghibberrish, using the data array',
			'user_id' => 1
		);

		Post::create($data);

		dd('post inserted');
	}

	public function update($id){
		$post = Post::find($id);
		$post->user_id = 2;
		$post->save();
		dd('post updated');
	}

	public function destroy($id){
		$post = Post::find($id);
		$post->delete();
		dd('post deleted');
	}
}