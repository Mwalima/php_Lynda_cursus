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
        'name' => 'Mwalima',
        'email' => 'asdfsadf@dsfds.nl',
        'password' => '12qw12qw'
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

Route::get('/register', function(){
    return view('register');
}
);