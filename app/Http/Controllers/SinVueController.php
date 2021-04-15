<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class SinVueController extends Controller
{
  public function index()
  {
      $categories = Category::all();
      $products = Product::all();

      //dd($categories);
      //dd($products);

      return view('vue/sinVue', compact('categories', 'products'));
  }
}
