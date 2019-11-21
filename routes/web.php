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

Route::get('/form','FormController@index')->name('form.show');

Route::get('/gallery', 'Controller@gallery')->name('gallery');

Route::get('/results', 'Controller@newEvent')->name('results');

Route::post('/send', 'FormController@workAtData')->name('workatdata');

Route::get('/charts', 'Controller@showCharts')->name('show.charts');

Route::get('/charts/test','Controller@newEvent');
Route::get('/charts/data','Controller@dataChart');
