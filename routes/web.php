<?php

use Illuminate\Support\Facades\Route;

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

//digunakan untuk meregistrasikan rute (route) yang menyediakan beberapa aksi bawaan (default) dalam mengelola resource "user" pada aplikasi.
Route::resource('user', 'ManagementUserController');
