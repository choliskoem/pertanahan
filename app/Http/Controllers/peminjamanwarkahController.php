<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanWarkah;
use App\Models\PinjamBukuTanah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class peminjamanwarkahController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->query('search');


       $peminjamanWarkah = PeminjamanWarkah::select(
            'peminjaman_warkah.id',
            'peminjaman_warkah.nomor_warkah',
            'peminjaman_warkah.tahun',
            'kecamatan.kecamatan',
            'kelurahan.kelurahan',
            'peminjaman_warkah.jenis_hak',
            'peminjaman_warkah.nomor_hak',
            'peminjaman_warkah.jenis_peminjaman',
            'peminjaman_warkah.nama_peminjam',
            'peminjaman_warkah.keperluan',
            'peminjaman_warkah.jangka_waktu',
            'peminjaman_warkah.tanggal_pinjam',
            'peminjaman_warkah.tanggal_kembali',
            'peminjaman_warkah.status'
        )
         ->leftJoin('kelurahan', 'kelurahan.id_kelurahan', '=', 'peminjaman_warkah.kelurahan_id')
        ->leftJoin('kecamatan', 'kecamatan.id_kecamatan', '=', 'peminjaman_warkah.kecamatan_id')
    
        ->get();


        $kecamatans = DB::select('SELECT * FROM kecamatan');


//   return view('pages.peminjaman.index', ['pinjambukutanahs' => $buku], compact('kecamatans'));
        return view('pages.peminjamanwarkah.index',['peminjamanWarkah' => $peminjamanWarkah] , compact('kecamatans'));
    }

    public function getKelurahans($kecamatan_id)
    {
        $kelurahans = DB::table('kelurahan')->where('id_kecamatan', $kecamatan_id)->get();
        return response()->json($kelurahans);
    }

    public function getDokumens($kelurahan_id)
    {
        $dokumens = DB::table('management_data')->where('id_kelurahan', $kelurahan_id)->get();
        return response()->json($dokumens);
    }




    public function store(Request $request)
{
    // $request->validate([
    //     'nomor_warkah'   => 'required|string',
    //     'tahun'          => 'required|integer',
    //     'kecamatan_id'   => 'required|integer',
    //     'kelurahan_id'   => 'required|integer',
    //     'jenis_hak'      => 'required|string',
    //     'nomor_hak'      => 'required|string',
    //     'jenis_peminjaman' => 'required|in:BT,SU,WARKAH',
    //     'nama_peminjam'  => 'required|string',
    //     'keperluan'      => 'required|string',
    //     'jangka_waktu'   => 'required|integer',
    // ]);

    $waktuSekarang = Carbon::now('Asia/Jakarta')->toDateString();

    DB::table('peminjaman_warkah')->insert([
        'nomor_warkah'      => $request->nomor_warkah,
        'tahun'             => $request->tahun,
        'kecamatan_id'      => $request->kecamatan,
        'kelurahan_id'      => $request->kelurahan,
        'jenis_hak'         => $request->jenis_hak,
        'nomor_hak'         => $request->nomor_hak,
        'jenis_peminjaman'  => $request->jenis_peminjaman, // BT, SU, WARKAH
        'nama_peminjam'     => $request->nama_peminjam,
        'keperluan'         => $request->keperluan,
        'jangka_waktu'      => $request->jangka_waktu,
        'tanggal_pinjam'    => $waktuSekarang,
        'tanggal_kembali'   => null,
        'status'            => 'dipinjam',
        'created_at'        => now(),
        'updated_at'        => now(),
    ]);

    return redirect()->route('peminjamanwarkah.index')->with('success', 'Data Berhasil Dikirim');
}

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Perform your search logic here
        $buku = PinjamBukuTanah::where('provinsi', 'like', '%' . $searchTerm . '%')
            ->orWhere('kabupaten', 'like', '%' . $searchTerm . '%')
            ->orWhere('kecamatan', 'like', '%' . $searchTerm . '%')
            ->orWhere('kelurahan', 'like', '%' . $searchTerm . '%')
            ->orWhere('no_su', 'like', '%' . $searchTerm . '%')
            ->orWhere('tipe_hak', 'like', '%' . $searchTerm . '%')
            ->orWhere('no_hak', 'like', '%' . $searchTerm . '%')
            ->orWhere('jenis', 'like', '%' . $searchTerm . '%')
            ->orWhere('pelayanan', 'like', '%' . $searchTerm . '%')
            ->orWhere('rak', 'like', '%' . $searchTerm . '%')
            ->orWhere('baris', 'like', '%' . $searchTerm . '%')
            ->orWhere('kolom', 'like', '%' . $searchTerm . '%')
            ->orWhere('bundle', 'like', '%' . $searchTerm . '%')
            ->orWhere('keterangan', 'like', '%' . $searchTerm . '%')
            ->orWhere('created_at', 'like', '%' . $searchTerm . '%')
            ->get();

        return response()->json($buku);
    }


    public function destroy($id)
    {

        $option = \App\Models\PeminjamanWarkah::findOrFail($id);
        $option->delete();
        return redirect()->route('peminjamanwarkah.index')->with('success', 'Option Deleted Successfully');
    }

    public function show($id)
    {
        // Retrieve the peminjaman record by its ID
        $peminjaman = PinjamBukuTanah::findOrFail($id);

        // Return a view to display the resource details
        return view('peminjaman.show', ['peminjaman' => $peminjaman]);
    }

    public function kembalikan($id)
{
    $peminjaman = PeminjamanWarkah::findOrFail($id);
    $peminjaman->status = 'dikembalikan';
    $peminjaman->tanggal_kembali = now();
    $peminjaman->save();

    return redirect()->back()->with('success', 'Peminjaman berhasil dikembalikan.');
}


    // public function getOptions(Request $request)
    // {
    //     $term = $request->get('q');

    //     $options = KecamatanModel::where('surat_ukur', 'LIKE', '%' . $term . '%')
    //         ->select('id', 'surat_ukur as text')
    //         ->limit(50)
    //         ->get();


    //     return response()->json(['items' => $options]);
    // }
 
}
