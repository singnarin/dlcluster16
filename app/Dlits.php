<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schools;

class Dlits extends Model
{
  public $timestamps = false;
  public function School(){
    return $this->hasOne('App\Schools');
  }
}
