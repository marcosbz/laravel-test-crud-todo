@extends('layouts.master')

@section('title')
  Edit Todo
@endsection

@section('body')
  <form class="row g-3" action={{ route('todos.update', ['id' => $todo->id]) }} method="post">
    <div class="mb-3">
      <label for="todoNameInput" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="todoNameInput" value="{{ $todo->name }}">
    </div>
    <div class="mb-3">
      <label for="todoDescriptionTextarea" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="todoDescriptionTextarea" rows="3" value="{{ $todo->description }}"></textarea>
    </div>
    @method('PUT')
    @csrf
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
@endsection
