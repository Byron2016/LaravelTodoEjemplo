<?php

namespace App\Http\Controllers;

use App\Posteo;
use Illuminate\Http\Request;

class PosteoController extends Controller
{
  public function create()
  {
    return view('posteo.create');
  }

  public function store(Request $request)
  {
    //dd($request->all());
    switch ($request->caso)
    {
      case 1:
        // Alternatively, validation rules may be specified as
        // a single | delimited string:
        $validated = $request->validate([
          'title' => 'required|unique:posteos|max:10',
          'body' => 'required',
        ]); 
        break;
      case 2:
        // Alternatively, validation rules may be specified as arrays of rules 
        // instead of a single | delimited string:
        $validatedData = $request->validate([
          'title' => ['required', 'unique:posteos', 'max:10'],
          'body' => ['required'],
        ]);
        break;
      case 3: 
        // Stopping On First Validation Failure
        $validated = $request->validate([
          'title' => 'bail|required|unique:posteos|max:10',
          'body' => 'required',
        ]);
        break;
      case 4: 
        // aún no probado.
        // In addition, you may use the validateWithBag method to 
        // validate a request and store any error messages within a named error bag:
        $validatedData = $request->validateWithBag('post', [
          'title' => ['required', 'unique:posteos', 'max:20'],
          'body' => ['required'],
        ]);
        break;
      case 5:
        echo "i es igual a 1";
        break;
    }
    Posteo::Create($request->all());
    return redirect()->back()->with('message','Posteo creado exitosamente');

  }


}