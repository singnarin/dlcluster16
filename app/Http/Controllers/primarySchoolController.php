<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Schools;
use Session;

class primarySchoolController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Schools::where('head_school_id', '=', $id)
      ->paginate(100);
      return View('primaryschool.select')
          ->with('school', $school);
    }
  }

  public function form(Request $request, $id = null){
      if(empty($id)){
        $school = new Schools;
      }else{
        $school = Schools::find($id);
      }

      if($request->all()){
        $school->no = $request->get('no');
        $school->moo = $request->get('moo');
        $school->tambol = $request->get('tambol');
        $school->district = $request->get('district');
        $school->province = $request->get('province');
        $school->tel = $request->get('tel');
        $school->email = $request->get('email');
        if($school->save()){
          return Redirect('primarygeneral');
        }
      }
      return View('school.form')
        ->with('school', $school);
    }
}
