<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  // * The attributes that are mass assignable.
  // *
  // * @var array
  // */
 protected $fillable = [
     'organization_id', 'name', 'direction', 'contact_name', 'contact_phone','status', 'description', 'image'
 ];

 public function product()
 {
   return $this->hasMany(Product::class);
 }


 public function Organization()
 {
   return $this->belongsTo(Organization::class);
 }

}
