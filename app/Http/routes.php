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

Route::get('teachersearch', 'TeacherController@teachersearch');
Route::post('schoolteachersearch', 'TeacherController@schoolteachersearch');
Route::post('schoolteachersearchp', 'TeacherController@schoolteachersearchp');
//end
Route::get('schoolstudent', 'schoolStudentController@index');
Route::any('schoolstudentForm/{id?}', 'schoolStudentController@form');
Route::any('studentForm/{id?}', 'StudentController@form');
