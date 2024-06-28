<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanBT extends Model
{
    use HasFactory;



    protected $keyType = 'string';
    protected $primaryKey = 'id_pinjam_bt';
    public $incrementing = false;

    // $table->uuid('id_pinjam_bt')->primary();
    // $table->string('no_hak');
    // $table->string('no_su');
    // $table->string('tipe_hak');
    // $table->string('provinsi');
    // $table->string('kabupaten');
    // $table->string('kecamatan');
    // $table->string('kelurahan');
    // $table->string('rak');
    // $table->string('baris');
    // $table->string('kolom');
    // $table->string('bundle');
    // $table->string('status');
    // $table->timestamps();
    protected  $fillable = [
        'id_pinjam_bt',
        'no_hak',
        'no_su',
        'tipe_hak',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'pelayanan',
        'rak',
        'baris',
        'kolom',
        'bundle',
        'status',

    ];
}
