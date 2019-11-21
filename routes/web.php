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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::view('form','dataAdd');
Route::post('add','addController@add');
//Route::match(['get','post'],'add','addController@add');

Route::get('show','addController@show');
//Route::match(['get','post'],'show','addController@show');

Route::get('edit/{id}','addController@edit');
Route::match(['get','post'],'update/{id}','addController@update');

Route::get('delete/{id}','addController@delete');
Route::get('home','addController@home');
//Route::post('update/{id}','addController@upate');

//Route::get('show','StudentController@index');


Route::get('tshow','TeacherController@index');
Route::get('tform','TeacherController@create');
Route::post('tadd','TeacherController@store');
Route::get('tedit/{id}','TeacherController@edit');
Route::post('tupdate/{id}','TeacherController@update');
Route::get('tdelete/{id}','TeacherController@destroy');








Route::get('teadetails','PortfolioController@index');
//Route::get('studetails','portfolioController@studentPortfolio');



Route::get('/', function () {
    return view('sms');
});

Route::post('sms','SmsController@sendSms');









