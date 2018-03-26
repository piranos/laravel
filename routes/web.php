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


/*
 |--------------------------------------------------------------------------
 | Web Routes
 |--------------------------------------------------------------------------
 |
 | This file is where you may define all of the routes that are handled
 | by your application. Just tell Laravel the URIs it should respond
 | to using a Closure or controller method. Build something great!
 |
 */


Route::get("/",'PagesController@index');
Route::get("/{id}",'PagesController@show');
Route::get("/secure/newpage",'PagesController@create');

//Route::get('/secure', ['as' => 'home', 'uses' => 'IndexController@index']);
//Route::get('/login', ['as' => 'login', 'uses' => 'IndexController@login']);
//Route::get('/logout', ['as' => 'logout', 'uses' => 'IndexController@logout'])->middleware('auth');
//Route::get('/dump', ['as' => 'dump', 'uses' => 'IndexController@dump', 'middleware' => 'auth'])->middleware('auth');

//Route::get('/callback', ['as' => 'logincallback', 'uses' => '\Auth0\Login\Auth0Controller@callback']);
