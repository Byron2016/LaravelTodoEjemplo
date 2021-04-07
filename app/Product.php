<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Category;

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
