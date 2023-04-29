<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ManagementUserController;
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
// Route untuk halaman awal, mengembalikan view 'signin' ketika '/' diakses
Route::get('/', function () {
return view('signin');
});
    
// Route untuk halaman cek, mengembalikan view 'signin' ketika '/cek' diakses
Route::get('cek', function () {
return view('signin');
});
    
// Route untuk handle form login, menampilkan request dari form login ketika '/signin_proses' diakses
Route::post('/signin_proses', function(Request $request){
dd($request);
});
    
// Route untuk halaman halo, mengembalikan "Halo, Selamat datang" ketika '/halo' diakses
Route::get('halo', function(){
return "Halo, Selamat datang";
});
    
// Route untuk halaman test2, mengembalikan "Laravel Test View 2" ketika '/test2' diakses
Route::get('/test2', function(){
return "Laravel Test View 2";
});
    
// Route untuk redirect dari '/test1' ke '/test2'
Route::redirect('/test1', '/test2');
    
// Route untuk halaman welcome, mengembalikan view 'welcome' dengan variable 'title' = 'Login Page' ketika '/welcome' diakses
Route::view('/welcome', 'welcome', ["title" => "Login Page"]);
    
// Route untuk halaman user, mengembalikan "Hello {id}" ketika '/user/{id}' diakses
Route::get('user/{id}', function ($id){
return "Hello " . $id;
});
    
// Route untuk halaman users, mengembalikan "Hello {id}" dengan nilai default id = "nafis" ketika '/users/{id}' diakses
Route::get('users/{id}', function ($id = "nafis") {
return "Hello " . $id;
});
    
// Route untuk halaman usersC, mengembalikan "Hello {id}" dengan nilai default id = "nafis45" ketika '/usersC/{id?}' diakses,
// dengan constraint bahwa id hanya berupa huruf besar atau kecil
Route:: get('usersC/{id?}', function ($id = "nafis45"){
return "Hello " . $id;
})->where('id', '[A-Za-z]+');
    
// Route untuk halaman users, mengembalikan "Hello {id}" dengan nilai default id = "nafis" ketika '/users/{id?}' diakses
Route::get('users/{id?}', function($id = "nafis"){
return "Hello " . $id;
});
    
// Route untuk halaman usersf, mengembalikan "Hello {id}" dengan nilai default id = "Nafis" ketika '/usersf/{id?}' diakses,
// dengan constraint bahwa id dapat berisi karakter apapun
Route::get('usersf/{id?}', function ($id = "Nafis"){
return "Hello " . $id;
})-> where('id', '.*');
    
// Menerapkan middleware 'auth' pada group route untuk /transaksi
Route::middleware(['auth'])->group(function(){
Route::get('/transaksi', function(){
    return "ini page transaksi";
    });
});
    
// Menentukan namespace 'admin' pada group route untuk /profile
Route::namespace(['admin'])->group(function(){
Route::get('/profile', function(){
    return "ini web profile";
    });
});
    
// Menentukan domain 'laravel.nafis.com' pada group route untuk /test
Route::domain(['laravel.nafis.com'])->group(function(){
Route::get('/test', function(){
    return "cek";
    });
});
    
// Menentukan prefix '/admin' pada group route untuk beberapa subroute
Route::prefix('/admin')->group(function(){
Route::get('/dashboard', function(){
    return "Ini Page /admin/dashboard";
    });
    Route::get('/users', function(){
    return "Ini Page /admin/users";
    });
    Route::get('/product', function(){
    return "Ini Page /admin/product";
    });
});

