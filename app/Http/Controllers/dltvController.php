<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Schools;
use App\Dltvs;

class dltvController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Dltvs::find($id);
      if(empty($school)){
        return Redirect('dltvForm');
      }else{
        return View('dltv.index')
          ->with('school', $school);
      }
    }
  }


  public function form(Request $request, $id = null){
      if(empty($id)){
        $dltv = new Dltvs;
      }else{
        $dltv = Dltvs::find($id);
      }

      if($request->all()){
        $dltv->id = $request->get('id');
        $dltv->head_school_id = $dltv->School->head_school_id;
        if (empty($request->get('dltvLevel'))){
          return View('dltv.form')
            ->withErrors('กรุณาระบุระดับชั้น')
            ->with('dltv', $dltv);
        }
        if ($request->get('dltvLevel') == 1) {
          $dltv->dltvLevel = 'ป.1-ป.6';
          $dltv->dltvLevelDetail = '-';
        } elseif ($request->get('dltvLevel') == 2) {
          $dltv->dltvLevel = 'บางระดับชั้น';
          $dltv->dltvLevelDetail = $request->get('dltvLevelDetail2');
        } elseif ($request->get('dltvLevel') == 3) {
          $dltv->dltvLevel = 'ไม่ได้ใช้การจัดการศึกษาทางไกลผ่านดาวเทียม';
          $dltv->dltvLevelDetail = $request->get('dltvLevelDetail3');
        } elseif ($request->get('dltvLevel') == 4) {
          $dltv->dltvLevel = 'อื่นๆ:';
          $dltv->dltvLevelDetail = $request->get('dltvLevelDetail4');
        }

        $dltv->dltvSatelliteNum = $request->get('dltvSatelliteNum');
        $dltv->dltvSatelliteWant = $request->get('dltvSatelliteWant');
        $dltv->dltvSatelliteWantNum = $request->get('dltvSatelliteWantNum');
        $dltv->dltvLnbNum = $request->get('dltvLnbNum');
        $dltv->dltvLnbWant = $request->get('dltvLnbWant');
        $dltv->dltvLnbWantNum = $request->get('dltvLnbWantNum');
        $dltv->dltvReceiverNum = $request->get('dltvReceiverNum');
        $dltv->dltvReceiverWant = $request->get('dltvReceiverWant');
        $dltv->dltvReceiverWantNum = $request->get('dltvReceiverWantNum');
        $dltv->dltvProblem = $request->get('dltvProblem');
        $dltv->dltvProblemDetail = $request->get('dltvProblemDetail');
        $dltv->dltvProblemFix = $request->get('dltvProblemFix');

        $myImg1 = '';
        $dest1 = 'upload/';
        $input1 = $request->file('dltvPicture1');
        if($input1!=''){
          $size1=GetimageSize($input1);
          $width1=$size1[0];
          if($width1 <= 400){
            $input1 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input1->getClientOriginalExtension();
            if($request->file('dltvPicture1')->move($dest1, $input1)){
              $myImg1 = $dest1.$input1;
              $dltv->dltvPicture1 = $myImg1;
              $dltv->dltvPictureDetail1 = $request->get('dltvPictureDetail1');
            }
          }
        }

        $myImg2 = '';
        $dest2 = 'upload/';
        $input2 = $request->file('dltvPicture2');
        if($input2!=''){
          $size2=GetimageSize($input2);
          $width2=$size2[0];
          if($width2 <= 400){
            $input2 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input2->getClientOriginalExtension();
            if($request->file('dltvPicture2')->move($dest2, $input2)){
              $myImg2 = $dest2.$input2;
              $dltv->dltvPicture2 = $myImg2;
              $dltv->dltvPictureDetail2 = $request->get('dltvPictureDetail2');
            }
          }
        }

        $myImg3 = '';
        $dest3 = 'upload/';
        $input3 = $request->file('dltvPicture3');
        if($input3!=''){
          $size3=GetimageSize($input3);
          $width3=$size3[0];
          if($width3 <= 400){
            $input3 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input3->getClientOriginalExtension();
            if($request->file('dltvPicture3')->move($dest3, $input3)){
              $myImg3 = $dest3.$input3;
              $dltv->dltvPicture3 = $myImg3;
              $dltv->dltvPictureDetail3 = $request->get('dltvPictureDetail3');
            }
          }
        }

        $myImg4 = '';
        $dest4 = 'upload/';
        $input4 = $request->file('dltvPicture4');
        if($input4!=''){
          $size4=GetimageSize($input4);
          $width4=$size4[0];
          if($width4 <= 400){
            $input4 = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 20)), 0, 20).'.'.$input4->getClientOriginalExtension();
            if($request->file('dltvPicture4')->move($dest4, $input4)){
              $myImg4 = $dest4.$input4;
              $dltv->dltvPicture4 = $myImg4;
              $dltv->dltvPictureDetail4 = $request->get('dltvPictureDetail4');
            }
          }
        }

        $dltv->saveUser = $request->get('saveUser');
        $dltv->directerUser = $request->get('directerUser');
        $dltv->telDirecter = $request->get('telDirecter');

        if($dltv->save()){
          $school = schools::find($request->get('id'));
          $school->dltvstatus = '1';
          if($school->save()){
            //return $school->studentstatus;
            return Redirect('dltv');
          }
        }

      }

      return View('dltv.form')
        ->with('dltv', $dltv);
    }

    public function primaryDltv(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $school = Dltvs::where('head_school_id', '=', $id)
          ->selectRaw('id, count(dltvLevel) as dltvLevel1')
          ->groupBy('dltvLevel')
        //->selectRaw('')
        ->get();
        return $school->dltvLevel1;
          //return View('teacher.primaryteacher')
          //  ->with('school', $school);
      }
    }
}
