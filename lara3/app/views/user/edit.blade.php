@extends('layouts.default')

@section('content')

	{{ Form::open( array('route' => array('user.update', $user->id), 'class' => 'fomr')) }}

@stop