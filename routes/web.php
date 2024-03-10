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

// Route::get('/', function () {
    // return view('welcome');
// });
Artisan::call('view:clear');

//home
Route::get('/', 'IndexController@main');
//catalog
Route::get('/catalog', 'IndexController@catalog');
//where_buy
Route::get('/where_buy', 'IndexController@where_buy');
//technology
Route::get('/technology', 'IndexController@technology');
//testing
Route::get('/testing', 'IndexController@testing');
//dileram
Route::get('/dileram', 'IndexController@dileram');
//articles
Route::get('/articles', 'IndexController@articles');
//contacts
Route::get('/contacts', 'IndexController@contacts');