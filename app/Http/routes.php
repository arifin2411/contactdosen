<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('homeawal');
});

Route::get('/homeawal','HomeController@showPageHomeAwal');
Route::get('/home','HomeController@showPageHome');
Route::get('/infodosen','HomeController@showPageInfoDosen');
Route::get('/feedback','HomeController@showPagefeedback');
Route::get('/aboutus','HomeController@showPageAboutus');
Route::get('/registers','HomeController@showPageRegister');
Route::post('/register/save','HomeController@validationRegister');
Route::get('/login','HomeController@showPageLogin');
Route::post('/login/login','HomeController@login');
Route::get('/aboutus2','HomeController@showPageaboutus2');

////Admin
Route::get('/adminhome','AdminController@showPageAdminHome');
Route::get('/admininsert','AdminController@showPageAdminInsertDosen');
Route::post('admininsert/save','AdminController@validationInsertDosen');
Route::get('admindelete','AdminController@showPageDelete');
Route::get('/delete/{id}','AdminController@delete');
Route::post('/insertfeedback/save','AdminController@validationInsertFeedback');

Route::post('/insert/save','HomeController@validatorInsertfeedback');

Route::post('insertpokemon/save','HomeController@validationInsert');