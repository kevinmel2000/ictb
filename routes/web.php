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
})->name('welcome');

Route::post('/checkmail', 'AJAXController@checkmail')->name('checkmail');
Route::post('/checksubtheme', 'AJAXController@checksubtheme')->name('checksubtheme');
Route::post('/storeapp', 'HomeController@storeApplication')->name('storeapp');
Route::post('/storeinfo', 'HomeController@storeInfo')->name('storeinfo');
Route::post('/updateinfo', 'HomeController@updateInfo')->name('updateinfo');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/speaker', 'HomeController@speaker')->name('speaker');
Route::get('/theme', 'HomeController@theme')->name('theme');
Route::get('/schedule', 'HomeController@schedule')->name('schedule');
Route::get('/guideline', 'HomeController@guideline')->name('guideline');
Route::get('/guidelineauthor', 'HomeController@guidelineauthor')->name('guidelineauthor');
Route::get('/exhibition', 'HomeController@exhibition')->name('exhibition');
Route::get('/venue', 'HomeController@venue')->name('venue');
Route::get('/accomodation', 'HomeController@accomodation')->name('accomodation');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/summary', 'HomeController@summary')->name('summary');



Route::group(['middleware' => ['payment']], function () {
    Route::get('/application', 'HomeController@application')->name('application');
	Route::get('/information', 'HomeController@information')->name('information');
});


Route::get('/component/{name}', 'AJAXController@component')->name('component');
Auth::routes();
