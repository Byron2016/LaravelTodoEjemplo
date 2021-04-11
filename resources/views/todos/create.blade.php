@extends('todos.layout')

@section('content')
  <div class="max-w-xs mt-5">
    <h1 class="text-2xl">What next you need to-Do</h1>
    {{-- @include('layouts.flash') --}}
    <x-ToDoAlert />
    <form method="post" action="/todos/create"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf
      <div class="mb-6">
        <label class="block uppercase text-gray-700 text-sm font-bold mb-2" for="title">
          Título
        </label>
        <input type="text" value="{{ old('title') }}" id="title" name="title"   placeholder="Título del ToDo" 
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />
        <p class="text-green-500 text-xs italic">Título del ToDo.</p>
      </div>
      <div class="flex items-center">
        <input type="submit" value="Create" 
        class="font-bold py-2 px-4 rounded bg-blue-500 hover:bg-blue-700  border-blue-500 hover:border-blue-700 text-white focus:outline-none focus:shadow-outline" />
      </div>
    </form>
  </div>
@endsection
