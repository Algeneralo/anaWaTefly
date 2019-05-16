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

    return view('home');
});

Route::get('/about', function () {

    return view('about');
});
Route::get('/projects', function () {

    return view('projects');
});
Route::get('/programs', function () {

    return view('programs');
});
Route::get('/partners', function () {

    return view('partners');
});
Route::get('/volunteer', function () {

    return view('volunteer');
});
Route::get('/contact-us', function () {

    return view('contact-us');
});
Route::get('/details/{table}/{id}', function () {

    return view('details');
})->where(['table' => 'projects|programs|news', 'id' => '[0-9]+']);