@extends('layouts.master')

@section('title')
  index
@endsection

@section('body')
  <h1>Todos index</h1>
  <a href="/">back to start</a>
  <ul>
    @foreach ($todos as $todo)
      <li>{{ $todo->name }}</li>
    @endforeach
  </ul>
@endsection
