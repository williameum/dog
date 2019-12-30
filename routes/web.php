<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dogs', 'DogController');

Route::get('/vue', function () {
    return view('index-vue');
});
