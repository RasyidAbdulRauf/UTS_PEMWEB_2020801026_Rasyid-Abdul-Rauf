<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class frontend extends Controller
{
    public function home ()
    {
        $pasiens = pasien::get();
            return view('kms-hospital.home.index', compact('pasiens'));
    }

    public function pasien ()
    {
        $pasiens = pasien::get();
            return view('kms-hospital.home.pasien', compact('pasiens'));
    }
}
