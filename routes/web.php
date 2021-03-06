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
Route::get('/lang/{locale}', 'WebsiteController@localization');
Route::match(['get', 'post'], '/partners', 'WebsiteController@partners');
Route::match(['get', 'post'], '/volunteer', 'WebsiteController@volunteer');
Route::match(['get', 'post'], '/contact-us', 'WebsiteController@contactUs');

Route::get('/details/{table}/{id}', 'WebsiteController@details')
    ->where(['table' => 'doneProjects|financeProjects|programs|news', 'id' => '[0-9]+']);


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', "Admin\ConfigController@index");
    Route::post('/config/{id?}', "Admin\ConfigController@store");
    Route::resource('about', 'Admin\AboutController')->except(['show']);
    Route::resource('directors', 'Admin\DirectorController')->except(['show']);
    Route::resource('doneProjects', 'Admin\DoneProjectController')->except(['show']);
    Route::resource('financeProjects', 'Admin\FinanceProjectController')->except(['show']);
    Route::resource('programs', 'Admin\ProgramController')->except(['show']);
    Route::resource('news', 'Admin\NewsController')->except(['show']);
    Route::resource('sliders', 'Admin\SliderController')->except(['show']);
    Route::resource('partners', 'Admin\PartnerController')->except(['show']);
    Route::get('emails', 'AdminController@emails');
    Route::delete('/delete/{table}/{id}', 'AdminController@destroy')
        ->where(['table' => 'mails|partnerRequests|volunteers|news', 'id' => '[0-9]+']);
    Route::post('/imgUpload', "AdminController@uploadCKEditorImage");
});
Auth::routes();



//Route::get('/image', function () {
//    $img = Image::make('assets/img/test.jpg')->resize(210, 210);
//
//    return $img->response('jpg');
//});