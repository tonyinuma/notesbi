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

Route::get('/','DashboardController@index');

Route::get('/app-cards','CardsController@index');
Route::get('/generate-card','CardsController@generateBingoCard')->name('generate-card');

Route::get('/app-bingo','CardsController@indexBingo');
Route::get('/bingo-number','CardsController@getBingoNumber')->name('bingo-number');
//Route::get('/app-notes','ApplicationController@todoApplication');
