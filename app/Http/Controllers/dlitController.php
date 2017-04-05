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
        if(!empty($request->get('pcWant'))){
          $dlit->pcWant = $request->get('pcWant');
        }
        $dlit->nbNum = $request->get('nbNum');
        if(!empty($request->get('nbWant'))){
          $dlit->nbWant = $request->get('nbWant');
        }
        $dlit->svNum = $request->get('svNum');
        if(!empty($request->get('svWant'))){
          $dlit->svWant = $request->get('svWant');
        }
        $dlit->tvNum = $request->get('tvnum');
        if(!empty($request->get('tvWant'))){
          $dlit->tvWant = $request->get('tvWant');
        }
        $dlit->cameraNum = $request->get('cameranum');
        if(!empty($request->get('cameraWant'))){
          $dlit->cameraWant = $request->get('cameraWant');
        }
        $dlit->tabletNum = $request->get('tabletnum');
        if(!empty($request->get('tabletWant'))){
          $dlit->tabletWant = $request->get('tabletWant');
        }
        $dlit->abNum = $request->get('abnum');
        if(!empty($request->get('abWant'))){
          $dlit->abWant = $request->get('abWant');
        }
        if(!empty($request->get('dlitTechnical'))){
        $dlit->dlitTechnical = $request->get('dlitTechnical');
        }
        $dlit->dlitTechnicalNum = $request->get('dlitTechnicalNum');
        if(!empty($request->get('dlitTeacher'))){
          $dlit->dlitTeacher = $request->get('dlitTeacher');
        }
        $dlit->dlitTeacherNum = $request->get('dlitTeacherNum');

        if(!empty($request->get('isp'))){
          $isp = implode(",", $request->get('isp'));
          $dlit->isp = $isp ;
        }

        $dlit->ispDetail = $request->get('ispDetail');
        if(!empty($request->get('internet'))){
          $dlit->internet = $request->get('internet');
        }
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
              if(!empty($request->get('dlitPictureDetail1'))){
                $dlit->dlitPictureDetail1 = $request->get('dlitPictureDetail1');
              }
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
              if(!empty($request->get('dlitPictureDetail2'))){
                $dlit->dlitPictureDetail2 = $request->get('dlitPictureDetail2');
              }
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
              if(!empty($request->get('dlitPictureDetail3'))){
                $dlit->dlitPictureDetail3 = $request->get('dlitPictureDetail3');
              }
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
              if(!empty($request->get('dlitPictureDetail4'))){
                $dlit->dlitPictureDetail4 = $request->get('dlitPictureDetail4');
              }
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

  public function primarydlit(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $dlitLevel = Dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,dlitLevel, count(*) as count_level')
        ->groupBy('dlitLevel')
        ->get();
      $pcNum = Dlits::where('head_school_id', '=', $id)
        ->sum('pcNum');
      $pcWant = Dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,pcWant, count(*) as count_pcWant')
        ->groupBy('pcWant')
        ->get();
      $nbNum = Dlits::where('head_school_id', '=', $id)
        ->sum('nbNum');
      $nbWant = Dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,nbWant, count(*) as count_nbWant')
        ->groupBy('nbWant')
        ->get();
      $svNum = dlits::where('head_school_id', '=', $id)
        ->sum('svNum');
      $svWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,svWant, count(*) as count_svWant')
        ->groupBy('svWant')
        ->get();
      $tvnum = dlits::where('head_school_id', '=', $id)
        ->sum('tvnum');
      $tvWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,tvWant, count(*) as count_tvWant')
        ->groupBy('tvWant')
        ->get();
      $cameranum = dlits::where('head_school_id', '=', $id)
        ->sum('cameranum');
      $cameraWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,cameraWant, count(*) as count_cameraWant')
        ->groupBy('cameraWant')
        ->get();
      $tabletnum = dlits::where('head_school_id', '=', $id)
        ->sum('tabletnum');
      $tabletWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,tabletWant, count(*) as count_tabletWant')
        ->groupBy('tabletWant')
        ->get();
      $abnum = dlits::where('head_school_id', '=', $id)
        ->sum('abnum');
      $abWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,abWant, count(*) as count_abWant')
        ->groupBy('abWant')
        ->get();
      $dlitTechnical = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,dlitTechnical, count(*) as count_dlitTechnical')
        ->groupBy('dlitTechnical')
        ->get();
      $dlitTeacher = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,dlitTeacher, count(*) as count_dlitTeacher')
        ->groupBy('dlitTeacher')
        ->get();
      $internet = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,internet, count(*) as count_internet')
        ->groupBy('internet')
        ->get();
      return View('dlit.primarydlit')
        ->with('dlitLevel', $dlitLevel)
        ->with('pcNum', $pcNum)
        ->with('pcWant', $pcWant)
        ->with('nbNum', $nbNum)
        ->with('nbWant', $nbWant)
        ->with('svNum', $svNum)
        ->with('svWant', $svWant)
        ->with('tvnum', $tvnum)
        ->with('tvWant', $tvWant)
        ->with('cameranum', $cameranum)
        ->with('cameraWant', $cameraWant)
        ->with('tabletnum', $tabletnum)
        ->with('tabletWant', $tabletWant)
        ->with('abnum', $abnum)
        ->with('abWant', $abWant)
        ->with('dlitTechnical', $dlitTechnical)
        ->with('dlitTeacher', $dlitTeacher)
        ->with('internet', $internet)
        ;
    }
  }

  public function schoolDlit(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school_ok = Schools::where('dlitstatus', '=', 1)
      ->where('head_school_id', '=', $id)
      ->count();
      $school_not = Schools::where('dlitstatus', '=', 0)
      ->where('head_school_id', '=', $id)
      ->count();
      $school = Schools::where('head_school_id', '=', $id)
      ->paginate(100);
      return View('dlit.select')
          ->with('school', $school)
          ->with('school_ok', $school_ok)
          ->with('school_not', $school_not);
    }
  }

  public function primaryindex(Request $request, $id = null){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $request->id ;
      $school = Dlits::find($id);
        return View('dlit.primary')
          ->with('school', $school);
      }
    }

    public function clusterdlit(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $dlitLevel = Dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,dlitLevel, count(*) as count_level')
          ->groupBy('dlitLevel')
          ->get();
        $pcNum = Dlits::where('head_school_id', '<>', $id)
          ->sum('pcNum');
        $pcWant = Dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,pcWant, count(*) as count_pcWant')
          ->groupBy('pcWant')
          ->get();
        $nbNum = Dlits::where('head_school_id', '<>', $id)
          ->sum('nbNum');
        $nbWant = Dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,nbWant, count(*) as count_nbWant')
          ->groupBy('nbWant')
          ->get();
        $svNum = dlits::where('head_school_id', '<>', $id)
          ->sum('svNum');
        $svWant = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,svWant, count(*) as count_svWant')
          ->groupBy('svWant')
          ->get();
        $tvnum = dlits::where('head_school_id', '<>', $id)
          ->sum('tvnum');
        $tvWant = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,tvWant, count(*) as count_tvWant')
          ->groupBy('tvWant')
          ->get();
        $cameranum = dlits::where('head_school_id', '<>', $id)
          ->sum('cameranum');
        $cameraWant = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,cameraWant, count(*) as count_cameraWant')
          ->groupBy('cameraWant')
          ->get();
        $tabletnum = dlits::where('head_school_id', '<>', $id)
          ->sum('tabletnum');
        $tabletWant = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,tabletWant, count(*) as count_tabletWant')
          ->groupBy('tabletWant')
          ->get();
        $abnum = dlits::where('head_school_id', '<>', $id)
          ->sum('abnum');
        $abWant = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,abWant, count(*) as count_abWant')
          ->groupBy('abWant')
          ->get();
        $dlitTechnical = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,dlitTechnical, count(*) as count_dlitTechnical')
          ->groupBy('dlitTechnical')
          ->get();
        $dlitTeacher = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,dlitTeacher, count(*) as count_dlitTeacher')
          ->groupBy('dlitTeacher')
          ->get();
        $internet = dlits::where('head_school_id', '<>', $id)
          ->selectRaw('id,internet, count(*) as count_internet')
          ->groupBy('internet')
          ->get();
        return View('dlit.primarydlit')
          ->with('dlitLevel', $dlitLevel)
          ->with('pcNum', $pcNum)
          ->with('pcWant', $pcWant)
          ->with('nbNum', $nbNum)
          ->with('nbWant', $nbWant)
          ->with('svNum', $svNum)
          ->with('svWant', $svWant)
          ->with('tvnum', $tvnum)
          ->with('tvWant', $tvWant)
          ->with('cameranum', $cameranum)
          ->with('cameraWant', $cameraWant)
          ->with('tabletnum', $tabletnum)
          ->with('tabletWant', $tabletWant)
          ->with('abnum', $abnum)
          ->with('abWant', $abWant)
          ->with('dlitTechnical', $dlitTechnical)
          ->with('dlitTeacher', $dlitTeacher)
          ->with('internet', $internet)
          ;
    }
  }

  public function clusterprimarydlit(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Schools::where('head_school_id', '=', $id)
      ->paginate(100);
      return View('dlit.clusterselect')
          ->with('school', $school);
    }
  }

  public function clusterprimarydlits(Request $request, $id = null){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $request->id ;
      $dlitLevel = Dlits::where('head_school_id', '=', $id)
        ->selectRaw('id, dlitLevel, count(*) as count_level')
        ->groupBy('dlitLevel')
        ->get();
      $pcNum = Dlits::where('head_school_id', '=', $id)
        ->sum('pcNum');
      $pcWant = Dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,pcWant, count(*) as count_pcWant')
        ->groupBy('pcWant')
        ->get();
      $nbNum = Dlits::where('head_school_id', '=', $id)
        ->sum('nbNum');
      $nbWant = Dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,nbWant, count(*) as count_nbWant')
        ->groupBy('nbWant')
        ->get();
      $svNum = dlits::where('head_school_id', '=', $id)
        ->sum('svNum');
      $svWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,svWant, count(*) as count_svWant')
        ->groupBy('svWant')
        ->get();
      $tvnum = dlits::where('head_school_id', '=', $id)
        ->sum('tvnum');
      $tvWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,tvWant, count(*) as count_tvWant')
        ->groupBy('tvWant')
        ->get();
      $cameranum = dlits::where('head_school_id', '=', $id)
        ->sum('cameranum');
      $cameraWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,cameraWant, count(*) as count_cameraWant')
        ->groupBy('cameraWant')
        ->get();
      $tabletnum = dlits::where('head_school_id', '=', $id)
        ->sum('tabletnum');
      $tabletWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,tabletWant, count(*) as count_tabletWant')
        ->groupBy('tabletWant')
        ->get();
      $abnum = dlits::where('head_school_id', '=', $id)
        ->sum('abnum');
      $abWant = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,abWant, count(*) as count_abWant')
        ->groupBy('abWant')
        ->get();
      $dlitTechnical = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,dlitTechnical, count(*) as count_dlitTechnical')
        ->groupBy('dlitTechnical')
        ->get();
      $dlitTeacher = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,dlitTeacher, count(*) as count_dlitTeacher')
        ->groupBy('dlitTeacher')
        ->get();
      $internet = dlits::where('head_school_id', '=', $id)
        ->selectRaw('id,internet, count(*) as count_internet')
        ->groupBy('internet')
        ->get();
      return View('dlit.primarydlit')
        ->with('dlitLevel', $dlitLevel)
        ->with('pcNum', $pcNum)
        ->with('pcWant', $pcWant)
        ->with('nbNum', $nbNum)
        ->with('nbWant', $nbWant)
        ->with('svNum', $svNum)
        ->with('svWant', $svWant)
        ->with('tvnum', $tvnum)
        ->with('tvWant', $tvWant)
        ->with('cameranum', $cameranum)
        ->with('cameraWant', $cameraWant)
        ->with('tabletnum', $tabletnum)
        ->with('tabletWant', $tabletWant)
        ->with('abnum', $abnum)
        ->with('abWant', $abWant)
        ->with('dlitTechnical', $dlitTechnical)
        ->with('dlitTeacher', $dlitTeacher)
        ->with('internet', $internet)
        ;
      }
    }

    public function dlitsearch(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $school_ok = Schools::where('dlitstatus', '=', 1)
          ->where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->count();
        $school_not = Schools::where('dlitstatus', '=', 0)
          ->where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->count();
        $school = Schools::where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->paginate(15);
        return View('dlit.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

    public function schooldlitsearch(Request $request, $id = null){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $request->get('id');
        if(empty($id)){
          $school_ok = Schools::where('dlitstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('dlitstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->paginate(15);
        }else{
          $school_ok = Schools::where('id', '=', $id)
            ->where('dlitstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('id', '=', $id)
            ->where('dlitstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('id', '=', $id)
            ->paginate(15);
        }
        return View('dlit.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

    public function schooldlitsearchp(Request $request, $id = null){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $request->get('id');
        if(empty($id)){
          $school_ok = Schools::where('dlitstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('dlitstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->paginate(15);
        }else{
          $school_ok = Schools::where('head_school_id', '=', $id)
            ->where('dlitstatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('head_school_id', '=', $id)
            ->where('dlitstatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('head_school_id', '=', $id)
            ->paginate(15);
        }
        return View('dlit.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

}
