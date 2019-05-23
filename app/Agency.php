<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
      'name',
      'address'
    ];


    public function qualifications()
    {
      return $this->hasMany('App\Qualification');
    }
}
