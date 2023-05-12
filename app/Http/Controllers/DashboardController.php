<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Membuat kelas DashboardController yang mewarisi kelas Controller bawaan Laravel
class DashboardController extends Controller
{
    // Metode index untuk menangani permintaan HTTP GET pada alamat URL terkait
    public function index(){
        // Mengembalikan tampilan 'backend.dashboard' untuk ditampilkan kepada pengguna
        return view('backend.dashboard');
    }
}
