<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Category;

class NcategoryController extends Controller
{
  public function index()
  {
      return Category::all();
  }
}
