<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(){
		$data = Post::all();
		return view('posts.index')->with('data', $data);
	}

	public function show($id){
		$data = Post::findOrFail($id);
		return view('posts.show')->with('data', $data);
	}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			//dd($request->all());
      switch ($request->caso){
        case 1:
          // Alternatively, validation rules may be specified as  a single | delimited string:
          $validated = $request->validate([
            'title' => 'required|unique:posts|max:10',
            'body' => 'required',
          ]);
          break;
        case 2:
          // Alternatively, validation rules may be specified as arrays of rules 
          // instead of a single | delimited string:
          $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:20'],
            'body' => ['required'],
          ]);
          break;
        case 3: 
          // Stopping On First Validation Failure
          $validated = $request->validate([
            'title' => 'bail|required|unique:posts|max:10',
            'body' => 'required',
          ]);
          break;
        case 4: 
          // In addition, you may use the validateWithBag method to 
          // validate a request and store any error messages within a named error bag:
          $validatedData = $request->validateWithBag('post', [
            'title' => ['required', 'unique:posts', 'max:20'],
            'body' => ['required'],
          ]);
          break;
        case 5:
          echo "i es igual a 1";
          break;
      }



      // The blog post is valid...
      Post::create($request->all());
      return redirect()->back()->with('message','Todo creado exitosamente');
    }

}
