<?php

namespace App\Http\Controllers;
use App\Models\Informasi;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $informasi = Informasi::paginate(3);
        return view('dashboard', compact('informasi'));
    }
}
