<?php

namespace App\Http\Controllers;

use App\Todo;
//use Illuminate\Http\Request;
use App\Http\Requests\ToDoCreateRequest;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $todos = Todo::all();
        //return view('todos.index')->with(['todos' => $todos]);
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    //public function store(Request $request)
    public function store(ToDoCreateRequest $request)
    {
        //dd($request->all());
        // if(!$request->title){
        //     return redirect()->back()->with('error','Por favor ingrese el título');
        // }
        // $request->validate([
        //   'title' => 'required|max:255',
        // ]);

        // $rules = [
        //   'title' => 'required|max:255',
        // ];

        // $messages = [
        //   'title.max' => 'Título del ToDo no puede ser mayor a 255 caracteres (contando espacios)',
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);
        // if($validator->fails()){
        //   return redirect()->back()
        //               ->withErrors($validator)
        //               ->withInput();
        // }
        // Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error eaque atque, odio esse amet itaque dolor totam animi exercitationem corporis soluta necessitatibus asperiores illum molestiae praesentium voluptatum vitae ea qui.
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    public function edit(Todo $todo)
    {
      //$todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
