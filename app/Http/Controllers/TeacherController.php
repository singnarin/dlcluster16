<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teachers;
use Session;
use App\Schools;

class TeacherController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Teachers::find($id);
      if(empty($school)){
        return Redirect('teacherForm');
      }else{
        return View('teacher.index')
          ->with('school', $school);
      }
    }
  }

//primaryteacher
public function primaryteacher(){
  $user = Session::get('user');
  if(empty($user)){
    return View('site.loginForm');
  }else{
    $id = $user[0]->id ;
    $school = Teachers::where('head_school_id', '=', $id)
    ->selectRaw('sum(mDirector) as summDirector,
                sum(fDirector) as sumfDirector,
                sum(mDeputy) as summDeputy,
                sum(fDeputy) as sumfDeputy,
                sum(mRegular) as summRegular,
                sum(fRegular) as sumfRegular,
                sum(mRate) as summRate,
                sum(fRate) as sumfRate,
                sum(mJanitor) as summJanitor,
                sum(fJanitor) as sumfJanitor,
                sum(mTemp) as summTemp,
                sum(fTemp) as sumfTemp,
                sum(childteacher) as sumchildteacher,
                sum(juniorhighschool) as sumjuniorhighschool,
                sum(highschoolteacher) as sumhighschoolteacher,
                sum(primaryteacher) as sumprimaryteacher
                ')
    ->get();
      return View('teacher.primaryteacher')
        ->with('school', $school);
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
          return Redirect('teacher');
        }
      }
      return View('teacher.form')
        ->with('teacher', $teacher)
        ->with('school', $school);
    }
}
