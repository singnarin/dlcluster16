<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schools;

class Students extends Model
{
  public $timestamps = false;
  public function School(){
    return $this->belongsTo('App\Schools');
  }
}
