<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Create Post</title>
</head>
<body>
  <div class="flex justify-center">
  <div class="max-w-xs mt-5">
    <h1 class="text-2xl">Crear un nuevo post</h1>
    <form action="/post/create" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf

      <div class="mb-4">
        <label class="block uppercase text-gray-700 text-sm font-bold mb-2" for="caso">
          Caso (entre 1 y 5):
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" id="caso" name="caso" min="1" max="5"  value="{{ old('caso') }}" />
        <p class="text-green-500 text-xs italic">Seleccione un caso.</p>
      </div>

      <div class="mb-6">
        <label class="block uppercase text-gray-700 text-sm font-bold mb-2" for="title">
          Título
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Título del Post" >
        <p class="text-green-500 text-xs italic">Título del post.</p>
      </div>

      <div class="mb-6">
        <label class="block uppercase text-gray-700 text-sm font-bold mb-2" for="body">
          Cuerpo
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="body" name="body" type="text" value="{{ old('body') }}" placeholder="Cuerpo del Post">
        <p class="text-green-500 text-xs italic">Cuerpo del post.</p>
      </div> 

      <div class="flex items-center">
        <input type="submit" value="Crear" class="font-bold py-2 px-4 rounded bg-blue-500 hover:bg-blue-700  border-blue-500 hover:border-blue-700 text-white focus:outline-none focus:shadow-outline" />
      </div>

    </form>
  </div>
  </div>


</body>
</html>