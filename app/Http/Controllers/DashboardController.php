<?php

namespace App\Http\Controllers;

use App\Lokasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()

    {
        $lokasi = Lokasi::all();
        return view('homepage.home', compact('lokasi'));
    }
}
