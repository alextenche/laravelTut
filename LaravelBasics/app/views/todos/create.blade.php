@extends('layouts.main')
@section('content')
  {{-- <form method="post" action="http://laravel.dev:8000/todos" accept-charset="UTF-8"> --}}
    {{-- <label for="title"> List Title </label> --}}
    {{-- <input name="title" type="text" id="title"> --}}
    {{-- <input class="button" type="submit" value="submit"> --}}
  {{-- </form> --}}
  {{ Form::open( array('route' => 'todos.store')) }}
    {{ Form::label('title', 'List Title') }}
    {{ Form::text('title') }}
    {{ Form::submit('submit', array('class'=> 'button')) }}
  {{ Form::close() }}
@stop
