<?php

namespace App\Http\Controllers;

use App\Models\tartip;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function umum()
    {
        return view('welcome');
    }

    public function tartip()
    {
        $umum = tartip::where('tatip', 'umum')->get();
        $keamanan = tartip::where('tatip', 'Keamanan dan Keetertiban')->get();
        $kebersihan = tartip::where('tatip', 'Kebersihan Lingkungan')->get();
        $iuran = tartip::where('tatip', 'Iuran Warga')->get();
        $kegiatan = tartip::where('tatip', 'Kegiatan Sosial')->get();

        return view('tatip', compact('umum', 'keamanan', 'kebersihan', 'iuran', 'kegiatan'));
    }
}
