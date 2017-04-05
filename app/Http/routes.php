<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SiteController@index');
Route::get('loginForm', 'SiteController@loginForm');
Route::post('login', 'SiteController@login');
Route::get('logout', 'SiteController@logout');

Route::get('general', 'schoolController@index');
Route::any('generalForm/{id?}', 'schoolController@form');
Route::get('primarygeneral', 'primaryschoolController@index');
Route::get('schoolgeneral', 'primaryschoolController@schoolgeneral');
Route::post('schoolgeneralsearch', 'primaryschoolController@schoolgeneralsearch');
Route::any('primarygeneralForm/{id?}', 'primaryschoolController@form');
Route::get('teacher', 'TeacherController@index');
Route::get('primaryteacher', 'TeacherController@primaryteacher');
//cluster
Route::get('clusterteacher', 'TeacherController@clusterteacher');
Route::get('clusterprimaryteacher', 'TeacherController@clusterprimaryteacher');
Route::get('clusterprimaryteachers/{id?}', 'TeacherController@clusterprimaryteachers');
Route::get('teachersearch', 'TeacherController@teachersearch');
Route::post('schoolteachersearch', 'TeacherController@schoolteachersearch');
Route::post('schoolteachersearchp', 'TeacherController@schoolteachersearchp');
//end
Route::get('schoolteacher', 'schoolTeacherController@index');
Route::any('schoolteacherForm/{id?}', 'schoolTeacherController@form');
Route::any('teacherForm/{id?}', 'TeacherController@form');
Route::get('student', 'StudentController@index');
Route::get('primarystudent', 'StudentController@primarystudent');
//cluster
Route::get('clusterstudent', 'StudentController@clusterstudent');
Route::get('clusterprimarystudent', 'StudentController@clusterprimarystudent');
Route::get('clusterprimarystudents/{id?}', 'StudentController@clusterprimarystudents');
Route::get('studentsearch', 'StudentController@studentsearch');
Route::post('schoolstudentsearch', 'StudentController@schoolstudentsearch');
Route::post('schoolstudentsearchp', 'StudentsController@schoolstudentsearchp');
//end
Route::get('schoolstudent', 'schoolStudentController@index');
Route::any('schoolstudentForm/{id?}', 'schoolStudentController@form');
Route::any('studentForm/{id?}', 'StudentController@form');

Route::get('dltv', 'dltvController@index');
Route::any('dltvForm/{id?}', 'dltvController@form');
Route::get('primarydltv', 'dltvController@primarydltv');
Route::get('schooldltv', 'dltvController@schoolDltv');
Route::any('primaryindex/{id?}', 'dltvController@primaryindex');
//cluster
Route::get('clusterdltv', 'dltvController@clusterdltv');
Route::get('clusterprimarydltv', 'dltvController@clusterprimarydltv');
Route::get('clusterprimarydltvs/{id?}', 'dltvController@clusterprimarydltvs');
Route::get('dltvsearch', 'dltvController@dltvsearch');
Route::post('schooldltvsearch', 'dltvController@schooldltvsearch');
Route::post('schooldltvsearchp', 'dltvController@schooldltvsearchp');
//end

Route::get('dlit', 'dlitController@index');
Route::any('dlitForm/{id?}', 'dlitController@form');
Route::get('primarydlit', 'dlitController@primarydlit');
Route::get('schooldlit', 'dlitController@schooldlit');
Route::any('primarydlitindex/{id?}', 'dlitController@primaryindex');
//cluster
Route::get('clusterdlit', 'dlitController@clusterdlit');
Route::get('clusterprimarydlit', 'dlitController@clusterprimarydlit');
Route::get('clusterprimarydlits/{id?}', 'dlitController@clusterprimarydlits');
Route::get('dlitsearch', 'dlitController@dlitsearch');
Route::post('schooldlitsearch', 'dlitController@schooldlitsearch');
Route::post('schooldlitsearchp', 'dlitController@schooldlitsearchp');
//end

Route::get('electricity', 'electricityController@index');
Route::any('electricityForm/{id?}', 'electricityController@form');

Route::get('primaryelectricity', 'electricityController@primaryelectricity');
Route::get('schoolelectricity', 'electricityController@schoolelectricity');
Route::any('primaryelectricityindex/{id?}', 'electricityController@primaryindex');
//cluster
Route::get('clusterelectricity', 'electricityController@clusterelectricity');
Route::get('clusterprimaryelectricity', 'electricityController@clusterprimaryelectricity');
Route::get('clusterprimaryelectricitys/{id?}', 'electricityController@clusterprimaryelectricitys');
Route::get('electricitysearch', 'electricityController@electricitysearch');
Route::post('schoolelectricitysearch', 'electricityController@schoolelectricitysearch');
Route::post('schoolelectricitysearchp', 'electricityController@schoolelectricitysearchp');
//end
