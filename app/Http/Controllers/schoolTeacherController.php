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
      $school = Schools::where('schools.head_school_id', '=', $id)
      ->leftJoin('teachers', 'schools.id', '=', 'teachers.id')
      ->where('teachers.id')
      ->paginate(100);
      //return View('teacher.select')
      //    ->with('school', $school);
      return $school;
    }
  }
  public function form(Request $request, $id = null){
      if(empty($id)){
        $teacher = new Teachers;
      }else{
        $teacher = Teachers::find($id);
        $school = Schools::find($id);
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
        if($teacher->save()){
          return Redirect('schoolteacher');
        }
      }
      return View('teacher.form')
        ->with('teacher', $teacher)
        ->with('school', $school);
    }

}
