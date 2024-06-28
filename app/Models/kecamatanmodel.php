<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatanmodel extends Model
{

    protected $table = 'kecamatanmodels';

    protected $fillable = [
        'id',
        'no_hak',
        'surat_ukur',
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
        'jenis',
        'keterangan',
    ];

    protected $keyType = 'string';
    public $incrementing = false;
}
