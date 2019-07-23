<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'ong_id', 'name', 'direction', 'contactname', 'contactphone','status', 'creationdate', 'description', 'image'
 ];
}
