<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['web']],function(){
	
	Route::get('home', function () {
	    return view('home');
	})->name('home');

	Route::get('about', function () {
	    return view('about');
	})->name('about');
	
	Route::prefix('/admin')->group(function(){

		Route::get('/logout', [
			'uses' => 'AdminController@logout',
			'as'=>'admin_logout'
		]);

		Route::get('/login', [
			'uses' => 'Auth\AdminLoginController@get_admin_login',
			'as'=>'get_admin_login'

		]);

		Route::post('/login', [
			'uses' => 'Auth\AdminLoginController@post_admin_login',
			'as'=>'post_admin_login'
		]);

		Route::get('/home', [
			'uses' => 'AdminController@admin_home',
			'as' => 'get_admin_home'
		]);

		Route::get('/register', [
			'uses' => 'AdminController@get_register',
			'as' => 'get_admin_register'
		]);

		Route::post('/register', [
			'uses' => 'AdminController@post_register',
			'as'=>'post_register'
		]);
		
		Route::get('/details', [
			'uses' => 'AdminController@admin_details',
			'as' => 'get_admin_details'
		]);

		Route::get('/records', [
			'uses' => 'AdminController@admin_records',
			'as' => 'get_admin_records'
		]);

	});
	

	Route::prefix('/student')->group(function(){

		Route::get('/logout', [
			'uses' => 'StudentController@logout',
			'as'=>'student_logout'
		]);

		Route::get('/login', [
			'uses' => 'Auth\StudentLoginController@get_student_login',
			'as'=>'get_student_login'
		]);

		Route::post('/login', [
			'uses' => 'Auth\StudentLoginController@post_student_login',
			'as'=>'post_student_login'
		]);

		Route::get('/home', [
			'uses' => 'StudentController@student_home',
			'as' => 'get_student_home'
		]);

		Route::get('/records', [
			'uses' => 'StudentController@student_records',
			'as' => 'get_student_records'
		]);

	});

	Route::prefix('/student/profile')->group(function(){
		Route::get('/', [
			'uses' => 'StudentController@student_profile',
			'as' => 'get_student_profile'
		]);

		Route::post('/email', [
			'uses' => 'SharedController@update_email',
			'as' => 'update_email'
		]);

		Route::post('/address', [
			'uses' => 'SharedController@update_address',
			'as' => 'update_address'
		]);

		Route::post('/tel', [
			'uses' => 'SharedController@update_tel',
			'as' => 'update_tel'
		]);

		Route::post('/pwd', [
			'uses' => 'SharedController@update_pwd',
			'as' => 'update_pwd'
		]);
	});

	Route::prefix('/teacher')->group(function(){

		Route::get('/logout', [
			'uses' => 'TeacherController@logout',
			'as'=>'teacher_logout'
		]);

		Route::get('/login', [
			'uses' => 'Auth\TeacherLoginController@get_teacher_login',
			'as'=>'get_teacher_login'
		]);

		Route::post('/login', [
			'uses' => 'Auth\TeacherLoginController@post_teacher_login',
			'as'=>'post_teacher_login'
		]);

		Route::get('/home', [
			'uses' => 'TeacherController@teacher_home',
			'as' => 'get_teacher_home'
		]);

		Route::get('/profile', [
			'uses' => 'TeacherController@teacher_profile',
			'as' => 'get_teacher_profile'
		]);

		Route::get('/records', [
			'uses' => 'TeacherController@teacher_records',
			'as' => 'get_teacher_records'
		]);

	});

	Route::prefix('/teacher/profile')->group(function(){
		Route::get('/', [
			'uses' => 'TeacherController@teacher_profile',
			'as' => 'get_teacher_profile'
		]);

		Route::post('/email', [
			'uses' => 'SharedController@update_email',
			'as' => 'update_email'
		]);

		Route::post('/address', [
			'uses' => 'SharedController@update_address',
			'as' => 'update_address'
		]);

		Route::post('/tel', [
			'uses' => 'SharedController@update_tel',
			'as' => 'update_tel'
		]);

		Route::post('/pwd', [
			'uses' => 'SharedController@update_pwd',
			'as' => 'update_pwd'
		]);
	});

});