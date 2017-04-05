<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electricitys extends Model
{
  public $timestamps = false;
  public function School(){
    return $this->hasOne('App\Schools');
  }
}
