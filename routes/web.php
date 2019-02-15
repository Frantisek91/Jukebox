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
    return view('welcome');
});

Route::get("/admin", "AdminController@index"); 

Route::resource("/admin/song", "SongController");
Route::get('/user', 'UserController@index');
Route::get('user/song/{song}', 'UserController@show');

Route::resource("/admin/author", "AuthorController");

