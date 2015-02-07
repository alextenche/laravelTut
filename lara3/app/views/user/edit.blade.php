@extends('layouts.default')

@section('content')

	<!-- Form model binding populates the form with data from a Model -->
	<!-- Documentation on form: http://laravel.com/docs/html -->
	{{ Form::model( $user, array('route' => array('user.update', $user->id), 'method' => 'put')) }}

		<li>
			<!-- Laravel Form can also create email text inputs -->
			{{ Form::label('email', 'your email') }}
			{{ Form::email('email') }}
			{{ $errors->first('email') }}
		</li>

		<li>
			<!-- Laravel does not populate password fields -->
			{{ Form::label('password', 'your password') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</li>

		<li>
			<!-- This cannot be set by the Form class -->
			{{ Form::label('active', 'is the user active ?') }}
			{{ Form::checkbox('active') }}
			{{ $errors->first('active') }}
		</li>

		<li>
			<!-- Set the options for a select box with an array -->
			{{ Form::label('permission', 'your permission') }}
			{{ Form::select('permission', array('1' => 'webmaster', '2' => 'editor', '3' => 'member'), 2) }}
			{{ $errors->first('permission') }}
		</li>

		<li>
			{{ Form::submit('save') }}
		</li>

	{{ Form::close() }}

@stop