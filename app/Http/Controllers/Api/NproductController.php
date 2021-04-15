<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Product;
use App\Http\Resources\NproductResource;

class NproductController extends Controller
{
  public function index()
  {
    //return Product::all();
    return NproductResource::collection(Product::all());
  }
}
