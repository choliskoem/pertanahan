<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penandatangananController extends Controller
{
    public function index()
    {
        return view('pages.penandatanganan.index');
    }
}
