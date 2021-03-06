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


Route::get('/', "DynamicFieldController@list");
Route::get("addmore", "DynamicFieldController@addmore");
Route::post("addmore/insert", "DynamicFieldController@addMorePost")->name('addmore.insert');
// Route::post("addmore/insert", "DyanmicFieldController@addMorePost")
Route::get('/lists',"DynamicFieldController@list");

Route::delete("/lists/{id}", "DataPostController@delete");
// Route::get("/show", "DynamicFieldController@update");

Route::get('show', "DataPostController@update");
// Route::put('/lists/{id}/edit', "DataPostController@update");

// Route::get('/lists/{id}/edit' ,"DataPostController@")
