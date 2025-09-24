<?php

namespace App\Http\Controllers;

use App\Models\PinjamBukuTanah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengembalianController extends Controller
{
    //
    public function index(Request $request)
    {
        $buku = PinjamBukuTanah::select(
            'pinjambukutanahs.id_pinjam',
            'pinjambukutanahs.provinsi',
            'pinjambukutanahs.kabupaten',
            'kecamatan.kecamatan',
            'kelurahan.kelurahan',
            'pinjambukutanahs.no_su',
            'pinjambukutanahs.tipe_hak',
            'pinjambukutanahs.no_hak',
            'pinjambukutanahs.jenis',
            'pinjambukutanahs.pelayanan',
            'pinjambukutanahs.rak',
            'pinjambukutanahs.baris',
            'pinjambukutanahs.kolom',
            'pinjambukutanahs.bundle',
            'pinjambukutanahs.keterangan',
            'pinjambukutanahs.waktu_dipinjam',
            'pinjambukutanahs.waktu_disetujui',
            'pinjambukutanahs.status'
        )
            ->leftJoin('kelurahan', 'kelurahan.id_kelurahan', '=', 'pinjambukutanahs.id_kelurahan')
            ->leftJoin('kecamatan', 'kecamatan.id_kecamatan', '=', 'kelurahan.id_kecamatan')
            ->get();

        return view('pages.pengembalian.index', ['pinjambukutanahs' => $buku]);
    }

  public function update($id)
{
    $pinjam = pinjambukutanah::findOrFail($id);

    if ($pinjam->status == 'Arsip Dikirim') {
        $pinjam->status = 'Dikembalikan';
    } elseif ($pinjam->status == 'Dikembalikan') {
        $pinjam->status = 'Selesai';
    }

    $pinjam->save();

    return redirect()->route('pengembalian.index')->with('success', 'Update Successfully');
}
}
