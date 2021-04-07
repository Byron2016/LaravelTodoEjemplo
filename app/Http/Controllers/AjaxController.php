<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CarritoController;

class AjaxController extends Controller
{
    
    public function create()
    {

      return view('ajax-request');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        #create or update your data here

        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function obtieneDataCarrito()
    {
        $carrito = new CarritoController();
        $data = $carrito->Index();
        //dd($data);
        #create or update your data here
        //return json_encode($data);
        //return response()->json_encode($data);
        //return response()->json(['success'=>json_encode($data)]);
        return response()->json(['success'=>$data]);

        //response()->json(['success'=>'Ajax request submitted successfully']);
         //response()->$data;

        //return response();
    }
}
