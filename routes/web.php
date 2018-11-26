<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('dashboard', 'UserController@index')->name('dashboard');


Route::resource('divisions', 'DivisionController');

