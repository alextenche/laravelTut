@extends('_layouts.default')

@section('content')

	@foreach($posts as $post)
		<article>
			<h2> {{ link_to_route('post', $post->title, array($post->id)) }} </h2>
			<p class="create_at">Created on {{{ date('Y-m-d', strtotime($post->created_at)) }}} By {{{ $post->user->name }}}</p>
			<p>{{{ str_limit($post->body, 200, '...') }}}</p>
			<p>{{ link_to_route('post', 'Read More &rsaquo;', array($post->id)) }}</p>
		</article>
	@endforeach

@stop