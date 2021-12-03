<?php

namespace App\Http\Controllers;

use App\Lokasi;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('homepage.tentangkami', compact('lokasi'));
    }
}
