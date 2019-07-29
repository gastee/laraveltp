<?php

namespace App;
use App\Category;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name'];


// public function Products()
// {
//   return $this->belongsToMany(Product::class, 'categories_products');
// }
public function products()
{
  return $this->hasMany(Product::class);
}
}
