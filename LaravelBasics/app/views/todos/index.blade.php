@extends('layouts.main')
@section('content')

  <h2> All Todos List </h2>

  <ul>
    @foreach($todo_lists as $list)
      <li> {{{ $list->name }}} </li>
    @endforeach
  </ul>

@stop
