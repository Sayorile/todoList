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

Route::get('/connexion', 'ConnexionController@connexion');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@traitement');

Route::get('/account','AccountController@account');