@extends('layouts.master')

@section('title')
  index
@endsection

@section('body')
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <h1 class="text-center">Todos index</h1>
      </div>
      <div class="row justify-content-center">
        <a href="/">back to start</a>
      </div>
      <div class="row">
        <form action="{{ route('todos.store') }}" method="post" class="form-inline">
          <label class="sr-only" for="inputTodoName">Name</label>
          <input type="text" name="name" class="form-control mb-2 mr-sm-2" id="inputTodoName" placeholder="Enter new Todo">

          <div class="form-check mb-2 mr-sm-2">
            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
            <label class="form-check-label" for="inlineFormCheck">
              Remember me
            </label>
          </div>

          @csrf

          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
      <div class="row">
        <div class="card card-default">
          <div class="card-header">
          TODO list
          </div>
          <div class="card-body">
            <ul class="list-group">
              @foreach ($todos as $todo)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $todo->name }}
                    <a href={{ route('todos.show', ['id' => $todo->id]) }} class="btn btn-primary btn-sm">View</a>
                    <form class="" action={{ route('todos.destroy', ['id' => $todo->id]) }} method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
