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

    return view('website.home');
});

Route::get('/about', function () {

    return view('website.about');
});
Route::get('/projects', function () {

    return view('website.projects');
});
Route::get('/programs', function () {

    return view('website.programs');
});
Route::get('/partners', function () {

    return view('website.partners');
});
Route::get('/volunteer', function () {

    return view('website.volunteer');
});
Route::get('/contact-us', function () {

    return view('website.contact-us');
});
Route::get('/details/{table}/{id}', function () {
    return view('details');
})->where(['table' => 'projects|programs|news', 'id' => '[0-9]+']);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('website.partners');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
