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

Route::get('/', function () {
    return view('2FA.login');
});

Route::get('/user-register',function(){
    return view('2FA.register');
});

Route::post('/loging','TwoController@store');
Route::post('/signup','TwoController@register');
Route::get('view', 'TwoController@viewData');
Route::get('/secondVerify','TwoController@secondeVerify');
Route::post('/OTP-Verify','TwoController@OTP_Verify');
Route::get('/resendOTP','TwoController@ResentOTP');
Route::get('/homePage',function(){
    return view('2FA.home');
});





Auth::routes();
Route::group(['middleware' => 'TwoFA'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
});

