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

// U can return string
Route::get('/hello', function () {
    return 'hello !';
});

// Retrieve a dynamic value in the route
Route::get('/book/{id}', function ($id) {
    return 'A book, id : ' . $id;
});

// It is possible to name your route.
Route::get('/books', function () {
    return 'List of all the books !!!!';
})->name('books.list');

// Example of using route's name
Route::get('/example', function () {
    $url = route('books.list');
    return 'This is url : ' . $url;
});

//  Link controller to route
Route::get('/test', 'TestController@hello');

// Retrieve a dynamic value in the route
Route::get('/movie/{id}', 'TestController@movie');

// Form data
Route::get('/form', 'TestController@form');
Route::post('/form', 'TestController@submitForm');


// Routes for MovieController
//Route::resource('/movies', 'MovieController');
Route::get('/movies', 'MovieController@index');
Route::get('/movies/create', 'MovieController@create');
Route::post('/movies/create', 'MovieController@store');
Route::get('/movies/detail/{id}', 'MovieController@show');
Route::get('/movies/edit/{id}', 'MovieController@edit');
Route::put('/movies/edit/{id}', 'MovieController@update');

Route::get('/books', 'BookController@index');


// Example of template
Route::get('/example', function () {
    $students = ['Olaf', 'Reginald', 'Nour'];

    return view('example', ['students' => $students]);
});
