<?php
Route::get('/', function () {
    $name = "Myname";

    return view('welcome');
});

Route::get('about',function(){
    return view('pages.about');
});

Route::get('contact',function(){
    return view('pages.contact');
});

Route::get('welcome', function () {return view('welcome');})->name('welcome');

Route::get('config', function () {return view('pages.config');})->name('config');

Route::get('register', function () {return view('register');})->name('register');

Route::get('register/{number?}','RegisterController@create')->where('number', '[0-9]+');
Route::get('register/{register?}','RegisterController@show');

Route::post('register', 'SubscriptionController@setSubscription')->name('register');

Route::get('test', function(){
    return view('test');
});
//
Route::post('test', 'RegisterController@getUsersById')->name('test');

Route::get('logout', 'RegisterController@logOutUser')->name('logout');

//werk gerelateerde pagina
Route::get('werk', function () {return view('pages.werk');})->name('werk');
Route::get('work', function () {return view('pages.phptest_environment.work');})->name('work');



//extra controlle van invoer
Route::group(['middleware' => ['paint']], function() {
    Route::get('paint_form', function(){
        $name = Input::get('title');
        return view('pages.paint_form')->with('title',$name);
    });
});

Route::group(['middleware'=>['login']], function(){

    Route::get('login',function(){ return view('pages.login');})->name('login');

});
Route::match(['get', 'post'],'test','LoginCheckController@checkUser');

Route::get('failure', function(){
    return view('pages.failure');
});

Route::get('thanks', function () {return view('pages.thanks');})->name('thanks');

Route::get('paintings', "PaintingsController@jasonOutput")->name('paintings');

//Route::get('posts', 'PostsController@index')->name('posts');

Route::post('posts', 'RegisterController@logOutUser');
