<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        $kontak = Kontak::all();
        return view('homepage.kontak', compact('kontak'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Masukkan email yang benar',
            'message' => 'Pesan tidak boleh kosong',
        ]);

        $data = $request->all();
        Kontak::create($data);
        return redirect()->back()->with('message', 'Terima kasih atas tanggapan yang anda kirimkan');

    }
}
