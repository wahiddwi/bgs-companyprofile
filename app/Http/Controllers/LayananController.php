<?php

namespace App\Http\Controllers;

use App\Layanan;
use App\Lokasi;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        $layanan = Layanan::all();
        return view('homepage.layanan',compact('lokasi', 'layanan'));
    }
}
