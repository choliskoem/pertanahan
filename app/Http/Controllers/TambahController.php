<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class TambahController extends Controller
{

    public function index()
    {
        $kelurahans = Kelurahan::all(); // Ambil data kelurahan
        return view('pages.tambah.index', compact('kelurahans'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     // 'rak' => 'required|string|max:255',
        //     // 'baris' => 'required|string|max:255',
        //     // 'kolom' => 'required|string|max:255',
        //     // 'bundle' => 'required|string|max:255',
        //     // 'surat_ukur' => 'required|string|max:255',
        //     // 'no_hak' => 'required|string|max:255',
        //     // 'id_kelurahan' => 'required|exists:kelurahans,id_kelurahan',
        // ]);

        $id = Uuid::uuid4()->toString();

        // Insert data pembelian
        DB::table('management_data')->insert([
            'id_management' => $id,
            'rak'   => $request->rak,
            'baris' => $request->baris,
            'kolom' => $request->kolom,
            'bundle' => $request->bundle,
            'surat_ukur' => $request->surat_ukur,
            'no_hak' => $request->no_hak,
            'id_kelurahan' => $request->id_kelurahan,

        ]);

        // $management = new Management();
        // $management->id_management = (string) \Illuminate\Support\Str::uuid(); // Generate UUID
        // $management->rak = $request->rak;
        // $management->baris = $request->baris;
        // $management->kolom = $request->kolom;
        // $management->bundle = $request->bundle;
        // $management->surat_ukur = $request->surat_ukur;
        // $management->no_hak = $request->no_hak;
        // $management->id_kelurahan = $request->id_kelurahan;
        // $management->save();

        return redirect()->route('managements.create')->with('success', 'Data berhasil disimpan');
    }
}
