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
    Route::resource('profiles','GroupController',['only' => ['index', 'edit','show', 'update', 'destroy']])->middleware('auth');
    // Crear Grupo
    Route::resource('groups', 'SearchsController')->middleware('auth');
    //Vista grupos
    Route::get('/all-groups', 'GroupsController@index')->name('groups.all');

    // Conciertos admin
    Route::resource('conciertos', 'ConciertosController')->middleware('auth');
    // Buscador
    Route::get('/search','SectionsController@search') -> name('search');

     // Conciertos public
     Route::get('/conciertos-public', 'SectionsController@conciertos')-> name('conciertos');
     // Conciertos y grupos public detail
     Route::get('/conciertos-public/{id}', 'SectionsController@conciertosdetail')-> name('conciertosdetails');
     Route::get('/groups-public/{id}', 'SectionsController@groupsdetail')->name('groupsdetails');
     // Añadir comentario
     Route::get('/add-comment/{id}','SectionsController@commentconcert')-> name('commentConcert');
     //  Guardaar comentario
     Route::post('/storeComm','SectionsController@storeComm') -> name('savecomm');
    
    // Follow and unfollow concert
    Route::resource('follows', 'GroupsfavoritesController');
    Route::resource('fgroups', 'GroupFavoritesController');
    //Comprar entradas
    Route::get('/entrades', 'SectionsController@buyticket')->name('buyticket');

    Route::resource('generos','GenerosController')-> middleware('auth');
});