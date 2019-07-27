<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'category', 'status', 'image'];

	public function category()
	{
		return $this->belongsToMany(Category::class);
	}

  public function user()
  {
    return $this->belonsTo(User::class);
  }

  public function Project()
  {
    return $this->belonsTo(Project::class);
  }
}
	// public function user()
	// {
	// 	return $this->belongsTo(User::class);
	// }
