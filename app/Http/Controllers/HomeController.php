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

    public function exportpeminjaman()
    {
        return Excel::download(new LaporanExport, 'laporan_peminjaman.xlsx');
    }

    public function exportpengembalian()
    {
        return Excel::download(new LaporanExport3, 'laporan_pengembalian.xlsx');
    }

    public function exportarsip()
    {
        return Excel::download(new LaporanExport2, 'laporan_arsip_dikirim.xlsx');
    }

    public function exportselesai()
    {
        return Excel::download(new LaporanExport4, 'laporan_selesai.xlsx');
    }
}
