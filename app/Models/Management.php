<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    // use HasFactory;

    protected $table = 'management_data';
    protected $primaryKey = 'id_management';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_management',
        'rak',
        'baris',
        'kolom',
        'bundle',
        'surat_ukur',
        'no_hak',
        'id_kelurahan'

    ];
}
