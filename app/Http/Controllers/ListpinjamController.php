<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Models\PinjamBukuTanah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ListpinjamController extends Controller
{
    //
    public function index(Request $request)
    {
        $searchTerm = $request->query('search');


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
            'pinjambukutanahs.name',
            'pinjambukutanahs.status'
        )
            ->leftJoin('kelurahan', 'kelurahan.id_kelurahan', '=', 'pinjambukutanahs.id_kelurahan')
            ->leftJoin('kecamatan', 'kecamatan.id_kecamatan', '=', 'kelurahan.id_kecamatan')
            ->get();


        return view('pages.listpinjam.index', ['pinjambukutanahs' => $buku]);
    }


   public function update($id)
{
    $pinjam = DB::table('pinjambukutanahs')->where('id_pinjam', $id)->first();

    if (!$pinjam) {
        return redirect()->route('listpinjam.index')->with('error', 'Data tidak ditemukan');
    }

    $waktuSekarang = Carbon::now('Asia/Jakarta');
    $waktuDitambahSatuJam = $waktuSekarang->copy()->addHour();

    if ($pinjam->status == 'Peminjaman') {
        DB::table('pinjambukutanahs')
            ->where('id_pinjam', $id)
            ->update([
                'status' => 'Arsip Dikirim',
                'waktu_disetujui' => $waktuDitambahSatuJam,
            ]);
    } elseif ($pinjam->status == 'Arsip Dikirim') {
        DB::table('pinjambukutanahs')
            ->where('id_pinjam', $id)
            ->update(['status' => 'Dikembalikan']);
    } elseif ($pinjam->status == 'Dikembalikan') {
        DB::table('pinjambukutanahs')
            ->where('id_pinjam', $id)
            ->update(['status' => 'Selesai']);
    }

    return redirect()->route('listpinjam.index')->with('success', 'Update Successfully');
}


    public function export()
    {
        return Excel::download(new LaporanExport, 'laporan.xlsx');
    }
}
