<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanWarkah extends Model
{

    use HasFactory;
    
    protected $table = 'peminjaman_warkah'; // nama tabel

    protected $fillable = [
        'nomor_warkah',
        'tahun',
        'kecamatan_id',
        'kelurahan_id',
        'jenis_hak',
        'nomor_hak',
        'jenis_peminjaman',
        'nama_peminjam',
        'keperluan',
        'jangka_waktu',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];
}
