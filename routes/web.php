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

Route::get('/insert', function(){
    return view('dynamic_field');
});

Route::get('dynamic-field', 'DynamicFieldController@index');
Route::get('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');