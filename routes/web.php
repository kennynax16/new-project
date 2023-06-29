<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'Post'],function (){
    Route::get('/post','IndexController')->name('post.index');
    Route::get('/post/create','CreateController')->name('post.create');
    Route::post('/post','StoreController')->name('post.store');
    Route::get('/post/{post}','ShowController')->name('post.show');
    Route::get('/post/{post}/edit','EditController')->name('post.edit');
    Route::patch('/post/{post}','UpdateController')->name('post.update');
    Route::delete('/post/{post}','DestroyController')->name('post.destroy');
});



