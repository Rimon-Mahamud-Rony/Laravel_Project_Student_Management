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


Route::get('/main', function () {
    return view('welcome');
});
*/

Route::get('/', 'StudentController@index')->name('index');


Route::get('/create', 'StudentController@create')->name('create');

Route::get('/editstudent/{id}', 'StudentController@editstudent')->name('edit');

Route::post('/store', 'StudentController@store')->name('store');
Route::post('/update/{id}', 'StudentController@update')->name('update');

Route::post('/delete/{id}', 'StudentController@delete')->name('delete');


Route::get('/master', function () {
    return view('master');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
