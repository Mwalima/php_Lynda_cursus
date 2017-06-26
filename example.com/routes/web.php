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
    return view('welcome');
});


Route::get('/users', function() {
    App\User::create([
        'name' => Input::get('username'),
        'email' => Input::get('email'),
        'password' => Input::get('password')
    ]);

    return response()->json(App\User::all());
});


Route::get('about',function(){
    return 'About content goes here';
});

Route::get('about/directions',function(){
    return 'directions goed here';
});

Route::get('about/{theSubject}',function($theSubject){
    return $theSubject.'About content goes here';
});


Route::post('/register', function(){
    $user = new \App\User();
    $user->email =Input::get('email');
    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
    $theEmail = Input::get('email');
    return View::make('thanks')->with('theEmail', $theEmail);

});

Route::get('login',function(){
    return View::make('login');
});

Route::get('logout',function(){
    return View::make('logout');
});

Route::get('register', 'RegisterController@showRegister');

Route::get('welcome', function () {return view('welcome');})->name('welcome');

Route::get('register', function () {return view('register');})->name('register');

Route::get('logout', function () {return view('logout');})->name('logout');

Route::get('login', function () {return view('login');})->name('login');

// Home > [Page]
Route::get('register', 'RegisterController@show')->name('register');

Route::get('login', 'RegisterController@show')->name('login');

Route::get('logout', 'RegisterController@show')->name('logout');
