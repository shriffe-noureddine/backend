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

use App\Http\Controllers\booksController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/books', 'BooksController');
Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/{id}', 'AuthorsController@show');

Route::post('/books/{id}', 'BooksController@postMessage');


