<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name'];

  /**
   * Get the product for the category.
   */
  public function products()
  {
      return $this->hasMany(Product::class);
  }
}