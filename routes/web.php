<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('dashboard', 'UserController@index')->name('dashboard');
Route::get('degrees/trash', 'DegreeController@trash')->name('degrees.trash');
Route::post('degrees/retrieve', 'DegreeController@retrieve')->name('degrees.retrieve');
Route::post('students/addbook', 'StudentController@addBook')->name('students.addbook');

Route::resource('divisions', 'DivisionController');
Route::resource('degrees', 'DegreeController');
Route::resource('books', 'BookController');
Route::resource('students', 'StudentController');

