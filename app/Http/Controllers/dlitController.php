<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Schools;
use App\Dlits;

class dlitController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Dlits::find($id);
      if(empty($school)){
        return Redirect('dlitForm');
      }else{
        return View('dlit.index')
          ->with('school', $school);
      }
    }
  }
}
