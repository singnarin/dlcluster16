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

  public function form(Request $request, $id = null){
      if(empty($id)){
        $dlit = new Dlits;
      }else{
        $dlit = Dlits::find($id);
      }

      if($request->all()){
        $dlit->id = $request->get('id');
        $dlit->head_school_id = $dlit->School->head_school_id;
        if (empty($request->get('dlitLevel'))){
          return View('dlit.form')
            ->withErrors('กรุณาระบุระดับชั้น')
            ->with('dlit', $dlit);
        }

        if ($request->get('dlitLevel') == 1) {
          $dlit->dlitLevel = 'p1_p6';
          $dlit->dlitLevelDetail = '-';
        } elseif ($request->get('dlitLevel') == 2) {
          $dlit->dlitLevel = 'someone';
          $dlit->dlitLevelDetail = $request->get('dlitLevelDetail2');
        } elseif ($request->get('dlitLevel') == 3) {
          $dlit->dlitLevel = 'not';
          $dlit->dlitLevelDetail = $request->get('dlitLevelDetail3');
        } elseif ($request->get('dlitLevel') == 4) {
          $dlit->dlitLevel = 'other';
          $dlit->dlitLevelDetail = $request->get('dlitLevelDetail4');
        }

        $dlit->pcNum = $request->get('pcNum');
        $dlit->pcWant = $request->get('pcWant');
        $dlit->nbNum = $request->get('nbNum');
        $dlit->nbWant = $request->get('nbWant');
        $dlit->svNum = $request->get('svNum');
        $dlit->svWant = $request->get('svWant');
        $dlit->tvNum = $request->get('tvNum');
        $dlit->tvWant = $request->get('tvWant');
        $dlit->cameraNum = $request->get('cameraNum');
        $dlit->cameraWant = $request->get('cameraWant');
        $dlit->tabletNum = $request->get('tabletNum');
        $dlit->tabletWant = $request->get('tabletWant');
        $dlit->abNum = $request->get('abNum');
        $dlit->abWant = $request->get('abWant');
        $dlit->dlitTechnical = $request->get('dlitTechnical');
        $dlit->dlitTechnicalNum = $request->get('dlitTechnicalNum');
        $dlit->dlitTeacher = $request->get('dlitTeacher');
        $dlit->dlitTeacherNum = $request->get('dlitTeacherNum');
        $isp = implode(",", $request->get('isp'));
        $dlit->isp = $isp ;
        $dlit->ispDetail = $request->get('ispDetail');
        $dlit->internet = $request->get('internet');

        $myImg1 = '';
        $dest1 = 'upload/';
        $input1 = $request->file('dlitPicture1');
        if($input1!=''){
          $size1=GetimageSize($input1);
          $width1=$size1[0];
          if($width1 <= 400){
            $input1 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input1->getClientOriginalExtension();
            if($request->file('dlitPicture1')->move($dest1, $input1)){
              $myImg1 = $dest1.$input1;
              $dlit->dlitPicture1 = $myImg1;
              $dlit->dlitPictureDetail1 = $request->get('dlitPictureDetail1');
            }
          }
        }

        $myImg2 = '';
        $dest2 = 'upload/';
        $input2 = $request->file('dlitPicture2');
        if($input2!=''){
          $size2=GetimageSize($input2);
          $width2=$size2[0];
          if($width2 <= 400){
            $input2 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input2->getClientOriginalExtension();
            if($request->file('dlitPicture2')->move($dest2, $input2)){
              $myImg2 = $dest2.$input2;
              $dlit->dlitPicture2 = $myImg2;
              $dlit->dlitPictureDetail2 = $request->get('dlitPictureDetail2');
            }
          }
        }

        $myImg3 = '';
        $dest3 = 'upload/';
        $input3 = $request->file('dlitPicture3');
        if($input3!=''){
          $size3=GetimageSize($input3);
          $width3=$size3[0];
          if($width3 <= 400){
            $input3 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input3->getClientOriginalExtension();
            if($request->file('dlitPicture3')->move($dest3, $input3)){
              $myImg3 = $dest3.$input3;
              $dlit->dlitPicture3 = $myImg3;
              $dlit->dlitPictureDetail3 = $request->get('dlitPictureDetail3');
            }
          }
        }

        $myImg4 = '';
        $dest4 = 'upload/';
        $input4 = $request->file('dlitPicture4');
        if($input4!=''){
          $size4=GetimageSize($input4);
          $width4=$size4[0];
          if($width4 <= 400){
            $input4 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input4->getClientOriginalExtension();
            if($request->file('dlitPicture4')->move($dest4, $input4)){
              $myImg4 = $dest4.$input4;
              $dlit->dlitPicture4 = $myImg4;
              $dlit->dlitPictureDetail4 = $request->get('dlitPictureDetail4');
            }
          }
        }

        $dlit->saveUser = $request->get('saveUser');
        $dlit->directerUser = $request->get('directerUser');
        $dlit->telDirecter = $request->get('telDirecter');

        if($dlit->save()){
          $school = schools::find($request->get('id'));
          $school->dlitstatus = '1';
          if($school->save()){
            //return $school->studentstatus;
            return Redirect('dlit');
          }
        }

      }

      return View('dlit.form')
        ->with('dlit', $dlit);

  }


}
