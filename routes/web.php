<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'PublicController@index');
Route::get('contact', 'PublicController@contact_us');
Route::post('logout', 'Auth\SentinelLoginController@logout')->middleware('sentinel.auth');


Route::group(['namespace'=>'Auth', 'middleware'=>['guest']], function(){
	Route::post('login','SentinelLoginController@post_login');
	Route::get('login', function(){ return back();});
});


Route::group(['prefix'=>'dashboard', 'middleware'=>['sentinel.auth']], function(){

	Route::get('/','DashboardController@index');	

	Route::group(['namespace'=>'Settings'], function(){		
		Route::resource('departments','DepartmentController');		
		Route::resource('roles','RoleController');
	});

	Route::group(['namespace'=>'Hr'], function(){
		
		Route::resource('students','StudentsController');	
		//student Image
		Route::get('students/{student}/images', 'StudentImagesController@index')->name('student.images.index');
		Route::post('students/{student}/images', 'StudentImagesController@store')->name('student.images.store');
		Route::get('students/{student}/images/create', 'StudentImagesController@create')->name('student.images.create');
		Route::get('students/{student_id}/images/{image_id}/edit', 'StudentImagesController@edit')->name('student.images.edit');
		Route::PUT('students/{student}/images/{image}', 'StudentImagesController@update')->name('student.images.update');
		Route::DELETE('students/{student_id}/images/{image_id}', 'StudentImagesController@destroy')->name('student.images.destroy');
		//end student image	
	});
});




