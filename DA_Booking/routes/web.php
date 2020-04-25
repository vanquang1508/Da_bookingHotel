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

// Route::get('/', function () {
// 	Auth::loginUsingId(1);
//     return view('welcome');
// });

// Admin
Route::group(['namespace'=>'Admin'],function (){
    Route::group(['prefix'=>'login'],function (){
        Route::get('/','LoginController@getLogin');
        Route::post('check','LoginController@postLogin');
    });
    Route::get('logout','HomeController@getLogout');
    Route::group(['prefix'=>'admin','middleware' => ['CheckUsers']],function () {
        Route::get('/home','DemoController@index');
        Route::resource('home','HomeController');
        Route::resource('permission','PermissionController');
        Route::resource('role','RoleController');
        Route::resource('user','UserController');
        Route::resource('roomtype','RoomTypeController');
        Route::resource('tag','TagController');
        Route::resource('service','ServiceController');
        Route::resource('room','RoomController');
    });
    Route::get('/demo','DemoController@demo');
});

//Client
Route::group(['namespace'=>'Client'],function (){
    Route::get('/home','HomeController@home');
    Route::get('/show/{id}','HomeController@showrom')->name('showroom');
});
