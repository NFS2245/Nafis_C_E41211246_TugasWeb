<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

// Membuat rute RESTful untuk sumber daya HomeController pada alamat URL '/'
Route::resource('/',HomeController::class);

// Membuat rute RESTful untuk sumber daya DashboardController pada alamat URL '/dashboard'
Route::resource('dashboard',DashboardController::class);