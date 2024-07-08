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
        Schema::create('pinjambukutanahs', function (Blueprint $table) {
            $table->uuid('id_pinjam')->primary();
            $table->string('no_hak');
            $table->string('no_su');
            $table->string('tipe_hak');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('id_kecamatan');
            $table->string('id_kelurahan');
            $table->string('pelayanan');
            $table->string('rak');
            $table->string('baris');
            $table->string('kolom');
            $table->string('bundle');
            $table->string('status');
            $table->string('jenis');
            $table->string('keterangan');
            $table->timestamp('waktu_disetujui')->nullable();
            $table->timestamp('waktu_dipinjam')->nullable();
            $table->string('name');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjambukutanahs');
    }
};
