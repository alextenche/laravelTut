@extends('layouts.default')

@section('content')
	<p>{{{ $user->email or 'default value' }}}</p>
@stop


@section('sidebar')

	<p><a href="#">Some link</a></p>
	<p><a href="#">Some link</a></p>
	@parent
	<p><a href="#">Some link</a></p>
@stop