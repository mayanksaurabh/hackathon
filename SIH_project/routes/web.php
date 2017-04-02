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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','SearchController@search');
//Route::get('/search/filter','SearchController@filter')->name('univ');


//Route::get('/filter','SearchController@filter');

Route::post('send','mailController@send');
Route::get('email','mailController@email');
Route::get('/details/{uid}','SearchController@details');
Route::get('course/{uid}','SearchController@course');
Route::get('/category','SearchController@index');
Route::get('/live','SearchController@live');
Route::get('/uncol',function()
{
	return view('unappcol');
}

	);
Route::get('/uncos',function()
{
	return view('unappcos');
}

	);
Route::get('/ccol',function()
{
	return view('ccol');
}

	);
Route::get('/ccos',function()
{
	return view('ccos');
}

	);
Route::get('/dlp',function()
{
	return view('dlp');
}

	);




   

	
//Route::get('/search/filter','SearchController@filter')->name('univ');




Auth::routes();

Route::get('/home', 'HomeController@index');



Route::GET('admin/home','AdminController@index');
Route::GET('admin/editor','EditorController@index');

Route::GET('admin/test','EditorController@test');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm ')->name('admin.password.reset');



Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');





