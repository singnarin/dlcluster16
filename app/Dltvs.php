<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schools;

class Dltvs extends Model
{
  public $timestamps = false;
  public function School(){
    return $this->hasOne('App\Schools');
  }
}
