<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Schools;
use App\Electricitys;

class electricityController extends Controller
{
  public function index(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Electricitys::find($id);
      if(empty($school)){
        return Redirect('electricityForm');
      }else{
        return View('electricity.index')
          ->with('school', $school);
      }
    }
  }

  public function form(Request $request, $id = null){
      if(empty($id)){
        $electricity = new Electricitys;
      }else{
        $electricity = Electricitys::find($id);
      }

      if($request->all()){
        $electricity->id = $request->get('id');
        $electricity->head_school_id = $electricity->School->head_school_id;
        if (empty($request->get('electricitySystem'))){
          return View('electricity.form')
            ->withErrors('กรุณาระบุระบบไฟฟ้าโรงเรียน')
            ->with('electricity', $electricity);
        }

        if ($request->get('electricitySystem') == 1) {
          $electricity->electricitySystem = 'main';
          $electricity->systemDetail = '-';
        } elseif ($request->get('electricitySystem') == 2) {
          $electricity->electricitySystem = 'other';
          $electricity->systemDetail = $request->get('systemDetail');
        }

        if(!empty($request->get('electricityProblem'))){
        $electricity->electricityProblem = $request->get('electricityProblem');
        }
        $electricity->problemDetail = $request->get('problemDetail');
        $electricity->problemFix = $request->get('problemFix');

        if($electricity->save()){
          $school = schools::find($request->get('id'));
          $school->electricitystatus = '1';
          if($school->save()){
            //return $school->studentstatus;
            return Redirect('electricity');
          }
        }

      }

      return View('electricity.form')
        ->with('electricity', $electricity);
  }

  public function primaryelectricity(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $electricitySystem = Electricitys::where('head_school_id', '=', $id)
        ->selectRaw('id,electricitySystem, count(*) as count_system')
        ->groupBy('electricitySystem')
        ->get();
      $electricityProblem = Electricitys::where('head_school_id', '=', $id)
        ->selectRaw('id,electricityProblem, count(*) as count_problem')
        ->groupBy('electricityProblem')
        ->get();
      return View('electricity.primaryelectricity')
        ->with('electricitySystem', $electricitySystem)
        ->with('electricityProblem', $electricityProblem)
        ;
    }
  }

  public function schoolelectricity(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school_ok = Schools::where('electricitystatus', '=', 1)
      ->where('head_school_id', '=', $id)
      ->count();
      $school_not = Schools::where('electricitystatus', '=', 0)
      ->where('head_school_id', '=', $id)
      ->count();
      $school = Schools::where('head_school_id', '=', $id)
      ->paginate(100);
      return View('electricity.select')
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
      $school = Electricitys::find($id);
        return View('electricity.primary')
          ->with('school', $school);
      }
    }

    public function clusterelectricity(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $electricitySystem = Electricitys::where('head_school_id', '<>', $id)
          ->selectRaw('id,electricitySystem, count(*) as count_system')
          ->groupBy('electricitySystem')
          ->get();
        $electricityProblem = Electricitys::where('head_school_id', '<>', $id)
          ->selectRaw('id,electricityProblem, count(*) as count_problem')
          ->groupBy('electricityProblem')
          ->get();
        return View('electricity.primaryelectricity')
          ->with('electricitySystem', $electricitySystem)
          ->with('electricityProblem', $electricityProblem)
          ;
    }
  }

  public function clusterprimaryelectricity(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $user[0]->id ;
      $school = Schools::where('head_school_id', '=', $id)
      ->paginate(100);
      return View('electricity.clusterselect')
          ->with('school', $school);
    }
  }

  public function clusterprimaryelectricitys(Request $request, $id = null){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.loginForm');
    }else{
      $id = $request->id ;
      $electricitySystem = Electricitys::where('head_school_id', '=', $id)
        ->selectRaw('id,electricitySystem, count(*) as count_system')
        ->groupBy('electricitySystem')
        ->get();
      $electricityProblem = Electricitys::where('head_school_id', '=', $id)
        ->selectRaw('id,electricityProblem, count(*) as count_problem')
        ->groupBy('electricityProblem')
        ->get();
      return View('electricity.primaryelectricity')
        ->with('electricitySystem', $electricitySystem)
        ->with('electricityProblem', $electricityProblem)
        ;
      }
    }

    public function electricitysearch(){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $user[0]->id ;
        $school_ok = Schools::where('electricitystatus', '=', 1)
          ->where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->count();
        $school_not = Schools::where('electricitystatus', '=', 0)
          ->where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->count();
        $school = Schools::where('permission', '<>', '1')
          ->where('permission', '<>', '2')
          ->paginate(15);
        return View('electricity.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

    public function schoolelectricitysearch(Request $request, $id = null){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $request->get('id');
        if(empty($id)){
          $school_ok = Schools::where('electricitystatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('electricitystatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->paginate(15);
        }else{
          $school_ok = Schools::where('id', '=', $id)
            ->where('electricitystatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('id', '=', $id)
            ->where('electricitystatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('id', '=', $id)
            ->paginate(15);
        }
        return View('electricity.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

    public function schoolelectricitysearchp(Request $request, $id = null){
      $user = Session::get('user');
      if(empty($user)){
        return View('site.loginForm');
      }else{
        $id = $request->get('id');
        if(empty($id)){
          $school_ok = Schools::where('electricitystatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('electricitystatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->paginate(15);
        }else{
          $school_ok = Schools::where('head_school_id', '=', $id)
            ->where('electricitystatus', '=', 1)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school_not = Schools::where('head_school_id', '=', $id)
            ->where('electricitystatus', '=', 0)
            ->where('permission', '<>', '1')
            ->where('permission', '<>', '2')
            ->count();
          $school = Schools::where('head_school_id', '=', $id)
            ->paginate(300);
        }
        return View('electricity.clusterselectschool')
            ->with('school', $school)
            ->with('school_ok', $school_ok)
            ->with('school_not', $school_not);
      }
    }

}
