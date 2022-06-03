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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    // Gestion de grupos
    Route::get('/gestion-grupos','GroupController@index')->name("homeGestionGroups");
    
    Route::get('/','SectionsController@home')->name('home');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('homeAdmin');

});