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
Route::any('primarygeneralForm/{id?}', 'primaryschoolController@form');

Route::get('teacher', 'TeacherController@index');
Route::get('primaryteacher', 'TeacherController@primaryteacher');
Route::get('schoolteacher', 'schoolTeacherController@index');
Route::any('schoolteacherForm/{id?}', 'schoolTeacherController@form');
Route::any('teacherForm/{id?}', 'TeacherController@form');

Route::get('student', 'StudentController@index');
Route::any('studentForm/{id?}', 'StudentController@form');
