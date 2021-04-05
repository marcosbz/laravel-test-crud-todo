@extends('layouts.master')

@section('title`')
  show selected todo
@endsection

@section('body')
<div class="content">
  <a href="{{ route('todos.index') }}" class="btn btn-primary">Go back</a>
  <div class="card">
    <h5 class="card-header">{{ $todo->name }}</h5>
    <div class="card-body">
      <p class="card-text">{{ $todo->description }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
@endsection
