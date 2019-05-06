<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
  protected $fillable = [
    'agency_id',
    'owner_id',
    'vehicle_id',
    'driver_id',
    'credentialn',
    'name',
    'expiration',
    'wafers',
  ];

  public function agency()
  {
    return $this->belongsTo('App\Agency');
  }

  public function vehicle()
  {
    return $this->belongsTo('App\Vehicle');
  }

  public function driver()
  {
    return $this->belongsTo('App\Driver');
  }

  public function owner()
  {
    return $this->belongsTo('App\Owner');
  }
}
