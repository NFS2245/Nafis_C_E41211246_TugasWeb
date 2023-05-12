<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Membuat kelas HomeController yang mewarisi kelas Controller bawaan Laravel
class HomeController extends Controller
{
    // Metode index untuk menangani permintaan HTTP GET pada alamat URL terkait
    public function index(){
        // Mengembalikan tampilan 'frontend.home' untuk ditampilkan kepada pengguna
        return view('frontend.home');
    }
}