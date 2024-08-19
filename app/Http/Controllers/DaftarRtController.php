<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use Illuminate\Http\Request;

class DaftarRtController extends Controller
{
    public function daftarRt()
    {
        $rts = Rt::all();
        return view('Tentang.daftarRt', compact('rts')); 
    }
}
