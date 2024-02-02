<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Isi  menampilkan dashboard
        return view('dashboard');
    }
}
