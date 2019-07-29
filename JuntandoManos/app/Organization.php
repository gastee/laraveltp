<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['name', 'user_id', 'email', 'adress','phone'];

    public function User()
    {
      return $this->belongsTo(user::class);
    }

    public function Projects()
    {
      return $this->hasMany(Project::class);
    }
}
