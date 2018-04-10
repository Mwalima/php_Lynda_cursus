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
    return view('index');
});

Route::get('/users','UserController@getUserCredentials');
Route::post('/users',['as'=>'Users.store', 'uses'=>'UserController@insertUser']);

Route::get('/invite',function(){
    return view('invitation');
});

Route::get('/mydashboard',function(){
    return view('mydashboard');
});

Route::get('/whoweare',function(){
    return view('whoweare');
});

Route::get('/whatwedo',function(){
    return view('whatwedo');
});
Route::get('/whotocontact',function(){
    return view('whotocontact');
});

Route::get('/whotocontact', 'ContactMailController@contactUS');
Route::post('/whotocontact', ['as'=>'contactus.store','uses'=>'ContactMailController@contactUSPost']);

Route::get('/emailsend', 'ContactMailController@mailRecieved');