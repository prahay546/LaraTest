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
    return view('index');
});
/* ajaxformsubmit*/
Route::get('jquery-ajax-form-submit', 'ajaxFormSubmit\ContactController@index');
Route::post('jquery-ajax-form-submit', 'ajaxFormSubmit\ContactController@store');
/* ajaxcrud */
Route::resource('ajax-posts', 'ajaxcrud\AjaxPostController');