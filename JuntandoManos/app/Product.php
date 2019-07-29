<?php

namespace App;
// use App\Category;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'category', 'status', 'image'];

// Comento la relacion muchos a muchos que tira error
    	// public function categories()
    	// {
    	// 	return $this->belongsToMany(Category::class, 'categories_products');
    	// }

// Hago la relacion una categoria a muchos productos provisoria
      public function category()
      {
        return $this->belongsTo(Category::class);
      }



  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function Project()
  {
    return $this->belongsTo(Project::class);
  }
}
	// public function user()
	// {
	// 	return $this->belongsTo(User::class);
	// }
