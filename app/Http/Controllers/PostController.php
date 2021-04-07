<?php

namespace App\Http\Controllers;

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
}
