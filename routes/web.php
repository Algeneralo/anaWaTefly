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

Route::get('/', 'WebsiteController@index');
Route::get('/about', 'WebsiteController@about');
Route::get('/projects', 'WebsiteController@projects');
Route::get('/programs', 'WebsiteController@programs');
Route::get('/partners', 'WebsiteController@partners');
Route::match(['get', 'post'], '/volunteer', 'WebsiteController@volunteer');
Route::match(['get', 'post'], '/contact-us', 'WebsiteController@contactUs');

Route::get('/details/{table}/{id}', 'WebsiteController@details');
//Route::get('/details/{table}/{id}',
//    function () {
//        return view('details');
//    })->where(['table' => 'doneProjects|financeProjects|programs|news', 'id' => '[0-9]+']);


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('website.partners');
    });
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
