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
    
    Auth::routes();
    Route::get('/','SectionsController@home')->name('home');
    Route::get('/aboutus', 'SectionsController@aboutus')->name('aboutus');
    Route::get('/home', 'HomeController@index')->name('homeAdmin');
    // Gestion de grupos
    Route::resource('profiles','GroupController',['only' => ['index', 'edit','show', 'update', 'destroy']]);
    // Crear Grupo
    Route::resource('groups', 'CreateGroupController');
    // Buscador
    Route::post('/search','SectionsController@search') -> name('search');
});