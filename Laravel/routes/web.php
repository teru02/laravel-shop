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

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register_view','Auth\RegisterController@registerView');
Route::post('/register','Auth\RegisterController@register')->name('register');


Route::group(['middleware'=>'auth'],function(){
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/top', 'ItemsController@index');
Route::match(['GET','POST'],'/create','ItemsController@create');
Route::get('/{id}/detail','ItemsController@detail');
Route::post('/{id}/delete','ItemsController@delete')->name('item.delete');
});
