<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\kecamatanImport;

class kecController extends Controller
{
    public function index()
    {
        return view('pages.kecamatan.index');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new kecamatanImport, $request->file('file'));

        return back()->with('success', 'Data berhasil diimpor!');
    }
}
