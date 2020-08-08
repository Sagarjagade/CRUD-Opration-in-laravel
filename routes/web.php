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

Route::get('/list','ListController@index')->name('list');
Route::get('/list/Create','ListController@show')->name('list.Create');
Route::post('/list/Create','ListController@Insert')->name('list.insert');
Route::get('/list/delete/{id}','ListController@delete')->name('list.delete');
Route::get('/list/update/{id}','ListController@update')->name('list.update');
Route::post('/list/update/{id}','ListController@updateData')->name('list.updateData');



/*CRUD opration*/
Route::get('/createlist','ProductController@index')->name('createlist');
Route::get('/createlist/create','ProductController@Create')->name('createlist.list');
Route::post('/createlist/create','ProductController@store')->name('createlist.store');
Route::get('/createlist/delete/{id}','ProductController@delete')->name('createlist.delete');
Route::post('/createlist/update/{id}','ProductController@update')->name('createlist.update');
Route::get('/createlist/update/{id}','ProductController@updatedata')->name('createlist.updatedata');

/*login */
Route::get('/login','loginController@login')->name('login');
Route::get('/Register','loginController@Register')->name('Register');
Route::get('/forget','loginController@forget')->name('forget');

Route::post('/login','loginController@logindata')->name('login.data');
Route::post('/Register','loginController@Registerdata')->name('Register.data');










/*Route::get('/home','homeController@index');
Route::get('/login',function(){
	return view('login');
})->middleware('CheckAge');
Route::post('/home','homeController@getData');*/

