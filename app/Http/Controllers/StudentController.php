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
      }

      if($request->all()){
        $student->id = $request->get('id');
        $student->head_school_id = $student->School->head_school_id;
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
          $school = schools::find($request->get('id'));
          $school->studentstatus = '1';
          if($school->save()){
            //return $school->studentstatus;
            return Redirect('student');
            }
          }
        }
        return View('student.form')
          ->with('student', $student);

    }

    //primarystudent
    public function primarystudent(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $school = Students::where('head_school_id', '=', $id)
        ->selectRaw('sum(mo1) as summo1,
                    sum(fo1) as sumfo1,
                    sum(mo2) as summo2,
                    sum(fo2) as sumfo2,
                    sum(mp1) as summp1,
                    sum(fp1) as sumfp1,
                    sum(mp2) as summp2,
                    sum(fp2) as sumfp2,
                    sum(mp3) as summp3,
                    sum(fp3) as sumfp3,
                    sum(mp4) as summp4,
                    sum(fp4) as sumfp4,
                    sum(mp5) as summp5,
                    sum(fp5) as sumfp5,
                    sum(mp6) as summp6,
                    sum(fp6) as sumfp6,
                    sum(mm1) as summm1,
                    sum(fm1) as sumfm1,
                    sum(mm2) as summm2,
                    sum(fm2) as sumfm2,
                    sum(mm3) as summm3,
                    sum(fm3) as sumfm3,
                    sum(mm4) as summm4,
                    sum(fm4) as sumfm4,
                    sum(mm5) as summm5,
                    sum(fm5) as sumfm5,
                    sum(mm6) as summm6,
                    sum(fm6) as sumfm6
                    ')
        ->get();
          return View('student.primarystudent')
            ->with('school', $school);
      }
    }

    //clusterstudent
    public function clusterstudent(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $school = Students::where('head_school_id', '<>', $id)
        ->selectRaw('sum(mo1) as summo1,
                    sum(fo1) as sumfo1,
                    sum(mo2) as summo2,
                    sum(fo2) as sumfo2,
                    sum(mp1) as summp1,
                    sum(fp1) as sumfp1,
                    sum(mp2) as summp2,
                    sum(fp2) as sumfp2,
                    sum(mp3) as summp3,
                    sum(fp3) as sumfp3,
                    sum(mp4) as summp4,
                    sum(fp4) as sumfp4,
                    sum(mp5) as summp5,
                    sum(fp5) as sumfp5,
                    sum(mp6) as summp6,
                    sum(fp6) as sumfp6,
                    sum(mm1) as summm1,
                    sum(fm1) as sumfm1,
                    sum(mm2) as summm2,
                    sum(fm2) as sumfm2,
                    sum(mm3) as summm3,
                    sum(fm3) as sumfm3,
                    sum(mm4) as summm4,
                    sum(fm4) as sumfm4,
                    sum(mm5) as summm5,
                    sum(fm5) as sumfm5,
                    sum(mm6) as summm6,
                    sum(fm6) as sumfm6
                    ')
        ->get();
          return View('student.primarystudent')
            ->with('school', $school);
      }
    }

    //clusterprimarystudent
    public function clusterprimarystudent(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $school = Schools::where('head_school_id', '=', $id)
        ->paginate(100);
        return View('student.clusterselect')
            ->with('school', $school);
      }
    }

    public function clusterprimarystudents(Request $request, $id = null){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $school = Students::where('head_school_id', '=', $id)
        ->selectRaw('sum(mo1) as summo1,
                    sum(fo1) as sumfo1,
                    sum(mo2) as summo2,
                    sum(fo2) as sumfo2,
                    sum(mp1) as summp1,
                    sum(fp1) as sumfp1,
                    sum(mp2) as summp2,
                    sum(fp2) as sumfp2,
                    sum(mp3) as summp3,
                    sum(fp3) as sumfp3,
                    sum(mp4) as summp4,
                    sum(fp4) as sumfp4,
                    sum(mp5) as summp5,
                    sum(fp5) as sumfp5,
                    sum(mp6) as summp6,
                    sum(fp6) as sumfp6,
                    sum(mm1) as summm1,
                    sum(fm1) as sumfm1,
                    sum(mm2) as summm2,
                    sum(fm2) as sumfm2,
                    sum(mm3) as summm3,
                    sum(fm3) as sumfm3,
                    sum(mm4) as summm4,
                    sum(fm4) as sumfm4,
                    sum(mm5) as summm5,
                    sum(fm5) as sumfm5,
                    sum(mm6) as summm6,
                    sum(fm6) as sumfm6
                    ')
        ->get();
          return View('student.primarystudent')
            ->with('school', $school);
      }
    }

    public function studentsearch(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $school_ok = Schools::where('studentstatus', '=', 1)
          ->where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->count();
        $school_not = Schools::where('studentstatus', '=', 0)
          ->where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->count();
        $school = Schools::where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->paginate(15);
        return View('student.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

    public function schoolstudentsearch(Request $request, $id = null){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $request->get('id');
        if(empty($id)){
          $school_ok = Schools::where('studentstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('studentstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->paginate(15);
        }else{
          $school_ok = Schools::where('id', '=', $id)
            ->where('studentstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('id', '=', $id)
            ->where('studentstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('id', '=', $id)
            ->paginate(15);
        }
        return View('student.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

    public function schoolstudentsearchp(Request $request, $id = null){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $request->get('id');
        if(empty($id)){
          $school_ok = Schools::where('studentstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('studentstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->paginate(15);
        }else{
          $school_ok = Schools::where('head_school_id', '=', $id)
            ->where('studentstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('head_school_id', '=', $id)
            ->where('studentstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('head_school_id', '=', $id)
            ->paginate(15);
        }
        return View('student.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

}
