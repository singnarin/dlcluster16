<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class download extends Controller
{
  public function getDownload()
  {
    $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
    //PDF file is stored under project/public/download/info.pdf
        if($user[0]->permission == 0){
          $file= public_path(). "/download/school.pdf";
          return response()->download($file);
        }elseif($user[0]->permission == 1){
          $file= public_path(). "/download/primary.pdf";
          return response()->download($file);
        }elseif($user[0]->permission == 2){
          $file= public_path(). "/download/cluster.pdf";
          return response()->download($file);
        }
    }
  }
}
