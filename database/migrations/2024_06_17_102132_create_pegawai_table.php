<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->date('tgl_lahir');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->date('tgl_masuk_kerja');
            $table->unsignedBigInteger('bagian_id');
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('status_id');

            // Foreign key
            $table->foreign('bagian_id')->references('id')->on('bagian');
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
