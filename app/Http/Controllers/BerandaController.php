<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class BerandaController extends Controller
{
    /**
     * Tampilkan halaman beranda.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch paginated results with 6 items per page
        $informasi = Informasi::paginate(3);

        return view('Beranda.beranda', compact('informasi'));
    }
}
