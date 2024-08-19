<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class StrukturDesaController extends Controller
{
    public function struktur()
    {
        $pegawais = Pegawai::with('jabatan')->get();
        return view('Tentang.struktur', compact('pegawais'));
    }
}
