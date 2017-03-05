<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Students;
use Session;
use App\Schools;

class StudentController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Students::find($id);
      if(empty($school)){
        return Redirect('studentForm');
      }else{
      return View('student.index')
        ->with('school', $school);
      }
    }
  }

  public function form(Request $request, $id = null){
      if(empty($id)){
        $student = new Students;
      }else{
        $student = Students::find($id);
        $school = Schools::find($id);
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
        if($student->save()){
          return Redirect('student');
        }
      }
      return View('student.form')
        ->with('student', $student)
        ->with('school', $school);
    }
}
