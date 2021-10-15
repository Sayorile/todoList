<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/login', 'ConnexionController@connexion');
Route::post('/login', 'ConnexionController@traitement');

Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@traitement');

Route::get('/account','AccountController@account');

Route::get('/todolist','TodolistController@list')->name('todolist');
Route::post('/todolist', 'TodolistController@newtask');
Route::put('/todolist/{id}', 'TodolistController@updatetask');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
