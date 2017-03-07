<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Schools;
use Session;
use App\Students;

class schoolStudentController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school_ok = Schools::where('studentstatus', '=', 1)
      ->where('head_school_id', '=', $id)
      ->count();
      $school_not = Schools::where('studentstatus', '=', 0)
      ->where('head_school_id', '=', $id)
      ->count();
      $school = Schools::where('head_school_id', '=', $id)
      ->paginate(100);
      return View('student.select')
          ->with('school', $school)
          ->with('school_ok', $school_ok)
          ->with('school_not', $school_not);
    }
  }
  public function form(Request $request, $id = null){



        $student = Students::find($id);
        $school = Schools::find($id);
      if ($school->studentstatus == '0'){
        $student = new Students;
      }

      if($request->all()){
        $student->id = $request->get('id');
        $student->head_school_id = $request->get('head_school_id');
        $student->mo1 = $request->get('mo1');
        $student->mo2 = $request->get('mo2');
        $student->fo1 = $request->get('fo1');
        $student->fo2 = $request->get('fo2');
        $student->mp1 = $request->get('mp1');
        $student->mp2 = $request->get('mp2');
        $student->mp3 = $request->get('mp3');
        $student->mp4 = $request->get('mp4');
        $student->mp5 = $request->get('mp5');
        $student->mp6 = $request->get('mp6');
        $student->mm1 = $request->get('mm1');
        $student->mm2 = $request->get('mm2');
        $student->mm3 = $request->get('mm3');
        $student->mm4 = $request->get('mm4');
        $student->mm5 = $request->get('mm5');
        $student->mm6 = $request->get('mm6');
        $student->fp1 = $request->get('fp1');
        $student->fp2 = $request->get('fp2');
        $student->fp3 = $request->get('fp3');
        $student->fp4 = $request->get('fp4');
        $student->fp5 = $request->get('fp5');
        $student->fp6 = $request->get('fp6');
        $student->fm1 = $request->get('fm1');
        $student->fm2 = $request->get('fm2');
        $student->fm3 = $request->get('fm3');
        $student->fm4 = $request->get('fm4');
        $student->fm5 = $request->get('fm5');
        $student->fm6 = $request->get('fm6');
        $school->studentstatus = $request->get('studentstatus');
        if($student->save() && $school->save()){
          return Redirect('schoolstudent');
        }
      }
      return View('student.form')
        ->with('student', $student)
        ->with('school', $school);
    }
}
