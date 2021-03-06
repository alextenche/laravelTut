<?php

class Post extends \Eloquent {
	protected $fillable = ['title', 'body', 'user_id'];
	// protected $guarded = ['user_id'];

	public function user(){
		return $this->belongsTo('User');
	}
}