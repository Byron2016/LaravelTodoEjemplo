@extends('todos.layout')

@section('content')
  <div class="max-w-xs mt-5">
    <h1 class="text-2xl">Todos sus toDo</h1>
    <ul class="list-disc">
      @foreach ($todos as $todo )
        <li>
          {{ $todo->title }}
        </li>
      @endforeach
    </ul>
  </div>
@endsection
