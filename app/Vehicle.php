<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  protected $fillable = [
    'owner_id',
    'brand',
    'model',
    'year',
    'patent',
  ];

  public function driver()
  {
    return $this->belongsTo('App\Driver');
  }
}
