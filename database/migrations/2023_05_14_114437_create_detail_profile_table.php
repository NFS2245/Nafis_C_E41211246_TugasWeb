<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     // Method up() untuk migrasi database dengan membuat tabel detail_profile
    public function up()
    {
        Schema::create('detail_profile', function (Blueprint $table) {
            // Menambahkan kolom id sebagai primary key yang otomatis meningkat
            $table->bigIncrements('id');
            // Menambahkan kolom addres sebagai string
            $table->string('addres');
            // Menambahkan kolom nomor_tlp sebagai string
            $table->string('nomor_tlp');
            // Menambahkan kolom ttl sebagai date
            $table->date('ttl');
            // Menambahkan kolom foto sebagai string
            $table->string('foto');
            // Menambahkan kolom timestamps untuk mencatat tanggal pembuatan dan terakhir kali diperbarui
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_profile');
    }
};
