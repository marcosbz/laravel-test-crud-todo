@extends('layouts.master')

@section('title')
start
@endsection

@section('body')
  <h1>welcome</h1>
  <a href="{{ route('todos.index') }}">todos index</a>
@endsection
