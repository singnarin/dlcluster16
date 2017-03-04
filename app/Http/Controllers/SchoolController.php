<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Schools;

class SchoolController extends Controller
{
  public function index(){
    $school = Schools::all();
    return View('school.index')
     ->with('school', $school);
  }
}
