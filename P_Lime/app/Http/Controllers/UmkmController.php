<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function register()
    {
        return view('umkm.register');
    }

    public function peserta()
    {
        return view('umkm.peserta');
    }
}
