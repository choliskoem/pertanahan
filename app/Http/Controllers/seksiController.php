<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seksiController extends Controller
{
    public function index()
    {
        return view('pages.seksi.index');
    }
}
