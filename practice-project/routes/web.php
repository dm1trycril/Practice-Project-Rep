<?php

use Illuminate\Support\Facades\Route;

Route::get('/news', 'App\Http\Controllers\PostsController@news');

Route::get('/post/{id}', 'App\Http\Controllers\PostsController@show_single_post')->name('show_post');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/form', 'App\Http\Controllers\FormController@form')->name('form');

Route::post('/form/send', 'App\Http\Controllers\FormController@send')->name('send_form');



Route::get('/post-form', 'App\Http\Controllers\PostsController@post_form')->name('post_form');

Route::post('/post-form/send', 'App\Http\Controllers\PostsController@add_post')->name('add_post');

