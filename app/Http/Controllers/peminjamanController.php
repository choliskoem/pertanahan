<?php

namespace App\Http\Controllers;

use App\Models\kecamatanmodel;
use App\Models\PinjamBukuTanah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peminjamanController extends Controller
{
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
            'pinjambukutanahs.status'
        )
            ->leftJoin('kelurahan', 'kelurahan.id_kelurahan', '=', 'pinjambukutanahs.id_kelurahan')
            ->leftJoin('kecamatan', 'kecamatan.id_kecamatan', '=', 'kelurahan.id_kecamatan')
            ->get();


        $kecamatans = DB::select('SELECT * FROM kecamatan');



        return view('pages.peminjaman.index', ['pinjambukutanahs' => $buku], compact('kecamatans'));
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
        //     'no_hak' => 'required|min:1',
        //     'no_su' => 'required|min:1',
        //     'tipe_hak' => 'required|min:1',
        //     'kecamatan' => 'required|min:1',
        //     'kelurahan' => 'required|min:1',
        //     'pelayanan' => 'required|min:1',

        // ]);



        $data = $request->all();

        $bt  = new \App\Models\pinjambukutanah();

        $waktuSekarang = Carbon::now('Asia/Jakarta');
        $waktuDitambahSatuJam = $waktuSekarang->addHours(1);


        if ($request->input('exampleRadios') === 'BT') {
            DB::table('pinjambukutanahs')->insert([
                'id_pinjam' => uuid_create(),
                'no_hak' => $request->nomor_hak,
                'no_su' => $request->surat_ukur,
                'tipe_hak' => $request->tipe_hak,
                'provinsi' => "Gorontalo",
                'kabupaten' => "Kota Gorontalo",
                'id_kecamatan' => $request->kecamatan,
                'id_kelurahan' => $request->kelurahan,
                'pelayanan' => $request->pelayanan,
                'rak' => $request->rak,
                'baris' => $request->baris,
                'kolom' => $request->kolom,
                'bundle' => $request->bundle,
                'status' => "Peminjaman",
                'jenis' => "BT",
                'keterangan' => $request->keterangan,
                'waktu_dipinjam' => $waktuDitambahSatuJam,
                // 'waktu_disetujui' => '0000-00-00 00:00:00'

            ]);
            return redirect()->route('peminjaman.index')->with('success', 'Data Berhasil Dikirim');
        } elseif ($request->input('exampleRadios') === 'SU') {
            DB::table('pinjambukutanah')->insert([
                'id_pinjam' => uuid_create(),
                'no_hak' => $request->nomor_hak,
                'no_su' => $request->surat_ukur,
                'tipe_hak' => $request->tipe_hak,
                'provinsi' => "Gorontalo",
                'kabupaten' => "Kota Gorontalo",
                'id_kecamatan' => $request->kecamatan,
                'id_kelurahan' => $request->kelurahan,
                'pelayanan' => $request->pelayanan,
                'rak' => $request->rak,
                'baris' => $request->baris,
                'kolom' => $request->kolom,
                'bundle' => $request->bundle,
                'status' => "Peminjaman",
                'jenis' => "SU",
                'keterangan' => $request->keterangan,
                'waktu_dipinjam' => $waktuDitambahSatuJam,
                // 'waktu_disetujui' => '0000-00-00 00:00:00',

            ]);

            return redirect()->route('peminjaman.index')->with('success', 'Data Berhasil Dikirim');
        } elseif ($request->input('exampleRadios') === 'WARKAH') {
            DB::table('pinjambukutanah')->insert([
                'id_pinjam' => uuid_create(),
                'no_hak' => $request->nomor_hak,
                'no_su' => $request->surat_ukur,
                'tipe_hak' => $request->tipe_hak,
                'provinsi' => "Gorontalo",
                'kabupaten' => "Kota Gorontalo",
                'id_kecamatan' => $request->kecamatan,
                'id_kelurahan' => $request->kelurahan,
                'pelayanan' => $request->pelayanan,
                'rak' => $request->rak,
                'baris' => $request->baris,
                'kolom' => $request->kolom,
                'bundle' => $request->bundle,
                'status' => "Peminjaman",
                'jenis' => "WARKAH",
                'keterangan' => $request->keterangan,
                'waktu_dipinjam' => $waktuDitambahSatuJam,
                // 'waktu_disetujui' => '0000-00-00 00:00:00'

            ]);
            // return redirect()->route('peminjaman.index')->with('success', 'Data Berhasil Dikirim')->with('success', 'Data Berhasil Dikirim');
            // Simpan data ke database


            return redirect()->route('peminjaman.index')->with('success', 'Data Berhasil Dikirim');

            // Jika checkbox tidak dipilih, kembalikan respon error
            return response()->json(['error' => 'Checkbox must be checked'], 400);
        }
        return view('pages.peminjaman.index')->with('success', 'Data Berhasil Dikirim');



        // $bt->save();
        // $option->save();

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

        $option = \App\Models\PinjamBukuTanah::findOrFail($id);
        $option->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Option Deleted Successfully');
    }

    public function show($id)
    {
        // Retrieve the peminjaman record by its ID
        $peminjaman = PinjamBukuTanah::findOrFail($id);

        // Return a view to display the resource details
        return view('peminjaman.show', ['peminjaman' => $peminjaman]);
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
