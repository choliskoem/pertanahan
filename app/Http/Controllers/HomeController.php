<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Exports\LaporanExport2;
use App\Exports\LaporanExport3;
use App\Exports\LaporanExport4;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $total2 = \App\Models\PinjamBukuTanah::where('status', 'Peminjaman')->count();
        $total3 = \App\Models\PinjamBukuTanah::where('status', 'Arsip Dikirim')->count();
        $total4 = \App\Models\PinjamBukuTanah::where('status', 'Dikembalikan')->count();
        $total = \App\Models\PinjamBukuTanah::where('status', 'Selesai')->count();
        return view('pages.home', compact('total', 'total2', 'total3', 'total4'));
    }

    public function exportpeminjaman(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        return Excel::download(new LaporanExport($bulan, $tahun), 'laporan_peminjaman.xlsx');
    }

    public function exportpengembalian(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        return Excel::download(new LaporanExport3($bulan, $tahun), 'laporan_pengembalian.xlsx');
    }



    public function exportarsip(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
        return Excel::download(new LaporanExport2($bulan, $tahun), 'laporan_arsip_dikirim.xlsx');
    }

    public function exportselesai(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
        return Excel::download(new LaporanExport4($bulan, $tahun), 'laporan_selesai.xlsx');
    }
}
