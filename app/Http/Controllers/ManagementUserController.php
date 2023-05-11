<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //digunakan untuk menampilkan pesan "Halo" ketika user mengakses halaman utama pada aplikasi.
    public function index(){
        return "Halo";
    }

    //digunakan untuk menampilkan form untuk menambah data user pada aplikasi.
    public function create()
    { 
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    //digunakan untuk menciptakan data user yang baru pada aplikasi.
    public function store (Request $request)
    {
        return "Method ini nantinya akan digunakan untuk mencipatakan data user yang baru"; 
    }
    //digunakan untuk mengambil satu data user berdasarkan id pada aplikasi.
    public function show($id)
    { 
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id-" . $id;
    }
    //digunakan untuk menampilkan form untuk mengubah data user berdasarkan id pada aplikasi.
    public function edit($id)
    { 
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    //digunakan untuk mengubah data user berdasarkan id pada aplikasi.
    public function update(Request $request, $id)
    { 
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }
    //digunakan untuk menghapus data user berdasarkan id pada aplikasi.
    public function destroy($id)
    {
    return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
    //di sini isi controller management user
    }
}

