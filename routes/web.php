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
Route::post('/updateapp', 'HomeController@updateApplication')->name('updateapp');
Route::post('/storeinfo', 'HomeController@storeInfo')->name('storeinfo');
Route::post('/updateinfo', 'HomeController@updateInfo')->name('updateinfo');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/summary', 'HomeController@summary')->name('summary');
Route::post('/confirm', 'HomeController@confirm')->name('confirm');
Route::post('/confirmpayment', 'HomeController@confirmPayment')->name('confirmPayment');

Route::group(['middleware' => ['payment']], function () {
    Route::get('/application', 'HomeController@application')->name('application');
	Route::get('/information', 'HomeController@information')->name('information');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/listpeserta', 'AdminController@peserta')->name('listpeserta');

    Route::get('/listauthor', 'AdminController@author')->name('listauthor');
});


Route::get('/about', 'PageController@about')->name('about');
Route::get('/committee', 'PageController@committee')->name('committee');
Route::get('/speaker', 'PageController@speaker')->name('speaker');
Route::get('/theme', 'PageController@theme')->name('theme');
Route::get('/schedule', 'PageController@schedule')->name('schedule');
Route::get('/guideline', 'PageController@guideline')->name('guideline');
Route::get('/guidelineauthor', 'PageController@guidelineauthor')->name('guidelineauthor');
Route::get('/exhibition', 'PageController@exhibition')->name('exhibition');
Route::get('/venue', 'PageController@venue')->name('venue');
Route::get('/accomodation', 'PageController@accomodation')->name('accomodation');






Route::get('/component/{name}', 'AJAXController@component')->name('component');
Auth::routes();
