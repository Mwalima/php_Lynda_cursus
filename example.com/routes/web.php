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
//    $painting = new \App\Painting();
//    $painting->title = "Heel mooi schilderij";
//    $painting->artist="IkZelf";
//    $painting->year=2017;
//    $painting->save();

    return view('welcome');
});


Route::get('/users', function() {
    App\User::create([
        'name' => Input::get('username'),
        'email' => Input::get('email'),
        'password' => Input::get('password')
    ]);

    return response()->json(\App\User::all());
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


Route::get('welcome', function () {return view('welcome');})->name('welcome');

Route::get('config', function () {return view('config');})->name('config');

Route::get('register', function () {return view('register');})->name('register');

Route::get('logout', function () {return view('logout');})->name('logout');

Route::get('login', function () {return view('login');})->name('login');

Route::get('register/{number?}','RegisterController@create')->where('number', '[0-9]+');

Route::get('werk', function () {return view('werk');})->name('werk');

Route::group(['middleware' => ['paint']], function() {
    Route::get('paint_form', function(){
        $name = Input::get('title');
        return view('paint_form')->with('title',$name);
    });

});

Route::get('thanks', function () {return view('thanks');})->name('thanks');


Route::get('paintings', "PaintingsController@jasonOutput")->name('paintings');