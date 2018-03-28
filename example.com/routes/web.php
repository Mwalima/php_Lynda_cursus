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

Route::get('/users',function(){
    return view('users');
});

Route::get('/invite',function(){
    return view('invitation');
});


Route::get('/mydashboard',function(){
    return view('mydashboard');
});

