<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    public function User()
    {
      return $this->belongsTo(user::class);
    }

    public function Projects()
    {
      return $this->hasMany(Project::class);
    }
}
