<?php
use App\Http\Controllers\LanguageController;
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
// dashboard Routes

Auth::routes();

Route::get('/','StarterKitController@index');
//Route::get('/app-notes','ApplicationController@todoApplication');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
