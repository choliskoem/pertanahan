<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kecController extends Controller
{
    public function index()
    {
        return view('pages.kecamatan.index');
    }
}
