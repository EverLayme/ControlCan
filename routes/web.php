<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotController;
use App\Http\Controllers\AdministratorsController;
use App\Models\Administrador;

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


Auth::routes();

Route::resource('mascots', MascotController::class);

Route::resource('clientes', ClienteController::class);

Route::resource('administrators', AdministratorsController::class);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::post('login', 'App\Http\Controllers\AdministratorsController@login')->name('login');
