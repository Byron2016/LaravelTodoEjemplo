<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Category;
use App\Http\Resources\NcategoryResource;

class NcategoryController extends Controller
{
  public function index()
  {
    // return Category::all();
    return NcategoryResource::collection(Category::all());
  }
}
