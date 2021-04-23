@extends('todos.layout')

@section('content')
  {{-- <div class="max-w-xs bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-5"> --}}
  <div class="">
    <div class="flex flex-col justify-center border-b pb-4">
      <h1 class="text-2xl">Todos sus toDo</h1>
      <a href="/todos/create" 
      class="font-bold py-1 px-4 rounded bg-blue-500 hover:bg-blue-700  border-blue-500 hover:border-blue-700 text-white focus:outline-none focus:shadow-outline">
        Crear Nuevo
      </a>
    </div>
    <div class="">
      <ul class="my-5">
        <x-ToDoAlert />
        @foreach ($todos as $todo )
          <li class="flex justify-start py-2">
            
            <a href="{{ '/todos/'.$todo->id.'/edit' }}"
              class="mx-5 font-bold py-1 px-4 rounded bg-green-500 hover:bg-green-700  border-green-500 hover:border-green-700 text-white focus:outline-none focus:shadow-outline">
              Edit
            </a>
            <p>{{ $todo->title }}</p>
          </li>
        @endforeach
      </ul>
    </div>

  </div>
@endsection
