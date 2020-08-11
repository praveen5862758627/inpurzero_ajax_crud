<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::middleware('auth')->group(function () {

});*/
Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/check', 'HomeController@authcheck');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dashboard','ProjectController');


Route::resource('ajax-crud', 'AjaxCrudController');

Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');

Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');
