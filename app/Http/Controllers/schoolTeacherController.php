<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Schools;
use Session;
use App\Teachers;

class schoolTeacherController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school_ok = Schools::where('teacherstatus', '=', 1)
      ->where('head_school_id', '=', $id)
      ->count();
      $school_not = Schools::where('teacherstatus', '=', 0)
      ->where('head_school_id', '=', $id)
      ->count();
      $school = Schools::where('head_school_id', '=', $id)
      ->paginate(100);
      return View('teacher.select')
          ->with('school', $school)
          ->with('school_ok', $school_ok)
          ->with('school_not', $school_not);
    }
  }
  public function form(Request $request, $id = null){



        $teacher = Teachers::find($id);
        $school = Schools::find($id);
      if ($school->teacherstatus == '0'){
        $teacher = new Teachers;
      }

      if($request->all()){
        $teacher->id = $request->get('id');
        $teacher->head_school_id = $request->get('head_school_id');
        $teacher->mDirector = $request->get('mDirector');
        $teacher->mDeputy = $request->get('mDeputy');
        $teacher->mRegular = $request->get('mRegular');
        $teacher->mRate = $request->get('mRate');
        $teacher->mJanitor = $request->get('mJanitor');
        $teacher->mTemp = $request->get('mTemp');
        $teacher->fDirector = $request->get('fDirector');
        $teacher->fDeputy = $request->get('fDeputy');
        $teacher->fRegular = $request->get('fRegular');
        $teacher->fRate = $request->get('fRate');
        $teacher->fJanitor = $request->get('fJanitor');
        $teacher->fTemp = $request->get('fTemp');
        $teacher->childteacher = $request->get('childteacher');
        $teacher->primaryteacher = $request->get('primaryteacher');
        $teacher->juniorhighschool = $request->get('juniorhighschool');
        $teacher->highschoolteacher = $request->get('highschoolteacher');
        $school->teacherstatus = $request->get('teacherstatus');
        if($teacher->save() && $school->save()){
          return Redirect()->back();
        }
      }
      return View('teacher.form')
        ->with('teacher', $teacher)
        ->with('school', $school);
    }

}
