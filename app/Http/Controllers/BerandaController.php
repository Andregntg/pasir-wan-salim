<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Tampilkan halaman beranda.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Beranda.beranda');
    }
}
