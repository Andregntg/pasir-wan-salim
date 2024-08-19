<?php

namespace App\Http\Controllers;
use App\Models\Information;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index(){
        return view('Kontak.kontak');
    }
}