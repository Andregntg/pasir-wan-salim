<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
}
