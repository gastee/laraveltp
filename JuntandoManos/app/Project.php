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
     'ong_id', 'name', 'direction', 'contact_name', 'contact_phone','status', 'description', 'image'
 ];
}
