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
        return $request->get('myradio');
        /*
        $dltv->id = $request->get('id');
        $dltv->head_school_id = $student->School->head_school_id;
        $dltv->dltvLevel = $request->get('dltvLevel');
        $dltv->dltvLevelOther = $request->get('dltvLevelOther');
        $dltv->dltvSatelliteNum = $request->get('dltvSatelliteNum');
        $dltv->dltvSatelliteWant = $request->get('dltvSatelliteWant');
        $dltv->dltvSatelliteWantNum = $request->get('dltvSatelliteWantNum');
        $dltv->dltvLnbNum = $request->get('dltvLnbNum');
        $dltv->dltvLnbWant = $request->get('dltvLnbWant');
        $dltv->dltvLnbWantNum = $request->get('dltvLnbWantNum');
        $dltv->dltvReceiverNum = $request->get('dltvReceiverNum');
        $dltv->dltvReceiverWant = $request->get('dltvReceiverWant');
        $dltv->dltvReceiverWantNum = $request->get('dltvReceiverWantNum');
        $dltv->dltvSatelliteProblem = $request->get('dltvSatelliteProblem');
        $dltv->dltvSatelliteProblemDetail = $request->get('dltvSatelliteProblemDetail');
        $dltv->dltvPicture1 = $request->get('dltvPicture1');
        $dltv->dltvPicture2 = $request->get('dltvPicture2');
        $dltv->dltvPicture3 = $request->get('dltvPicture3');
        $dltv->dltvPicture4 = $request->get('dltvPicture4');
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
        }*/
      }
      return View('dltv.form')
        ->with('dltv', $dltv);
    }
}
