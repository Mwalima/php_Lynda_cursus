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
    $name = "Myname";

    return view('welcome');
});

Route::get('about',function(){
    return view('about');
});

Route::get('contact',function(){
    return view('contact');
});

Route::post('register', 'SubscriptionController@setSubscription')->name('register');

Route::post('register', 'SubscriptionController@setSubscription2')->name('register');

Route::get('welcome', function () {return view('welcome');})->name('welcome');

Route::get('config', function () {return view('config');})->name('config');

Route::get('register', function () {return view('register');})->name('register');


Route::get('logout', function () {
    Auth::logout();
    return view('logout');})->name('logout');

Route::group(['middleware'=>['login']], function(){
Route::get('login',function(){ return view('login');})->name('login');
Route::match(['get', 'post'],'test','LoginCheckController@checkUser');
});

//Route::get('register/{number?}','RegisterController@create')->where('number', '[0-9]+');


Route::get('register/{register?}','RegisterController@show');


Route::get('werk', function () {return view('werk');})->name('werk');

Route::group(['middleware' => ['paint']], function() {
    Route::get('paint_form', function(){
        $name = Input::get('title');
        return view('paint_form')->with('title',$name);
    });
});

Route::get('thanks', function () {return view('thanks');})->name('thanks');

Route::get('paintings', "PaintingsController@jasonOutput")->name('paintings');