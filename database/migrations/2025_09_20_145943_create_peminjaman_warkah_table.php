<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman_warkah', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_warkah');
            $table->integer('tahun');
            
            // Relasi ke kecamatan dan kelurahan
           $table->string('kecamatan_id');
            $table->string('kelurahan_id');

            $table->string('jenis_hak');
            $table->string('nomor_hak');
            $table->enum('jenis_peminjaman', ['BT', 'SU', 'WARKAH']);
            $table->string('nama_peminjam');
            $table->text('keperluan');
            $table->integer('jangka_waktu'); // dalam hari

         $table->timestamp('tanggal_pinjam')->useCurrent();
            $table->date('tanggal_kembali')->nullable();

            $table->enum('status', ['dipinjam', 'dikembalikan'])->default('dipinjam');

            $table->timestamps();

            // Foreign key opsional (sesuaikan kalau punya tabel kecamatan & kelurahan)
            // $table->foreign('kecamatan_id')->references('id_kecamatan')->on('kecamatan')->onDelete('set null');
            // $table->foreign('kelurahan_id')->references('id')->on('kelurahan')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_warkah');
    }
};
