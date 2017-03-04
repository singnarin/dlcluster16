<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HeadSchool;
class Schools extends Model
{
    public $timestamps = false;
    public function headSchool(){
      return $this->belongsTo('App\HeadSchool');
    }
}
