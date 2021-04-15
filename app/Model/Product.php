<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**
   * Get the category that owns the product.
   */
  public function category()
  {
      return $this->belongsTo(Category::class);
  }
}
