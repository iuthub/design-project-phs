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
//     return view('welcome');
// });


// Route::get('/pricing', function () {
//     return view('pages.pricing');
// });


// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'this is user '. $id. 'with name '. $name;
// });



Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/pricing', 'PagesController@pricing');
Route::get('/services', 'PagesController@services');



