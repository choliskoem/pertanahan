<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    public function index(){
        return view('pages.peminjaman.index');}
}
