<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('book_create');
});

Route::get('/user', function () {
    return view('user_create');
});

Route::post('create_book','App\Http\Controllers\BookController@insert');

Route::post('create_user','App\Http\Controllers\UserController@insert');
