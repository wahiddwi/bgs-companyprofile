<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('pages.admin.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required'
        ]);

        $layanan = new Layanan();
        $layanan->title = $request->title;
        $layanan['image'] = $request->file('image')->store(
            'assets/images', 'public'
        );

        $layanan->save();

        return redirect()->route('admin.layanan.index')->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('pages.admin.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required'
        ]);

        $layanan = Layanan::findOrFail($id);
        $layanan->title = $request->title;

        if ($request->image) {
            # menghapus gambar lama yang ada di Storage
            Storage::disk('local')->delete('public/'.$layanan->image);
        }
        //request gambar untuk upload gambar baru
        $data['image'] = $request->file('image')->store(
            'assets/images', 'public'
        );
        $layanan->update($data);

        return redirect()->route('admin.layanan.index')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $image = Storage::disk('local')->delete('public/'.$layanan->image);
        $layanan->delete();

        return redirect()->route('admin.layanan.index')->with('message', 'Data Berhasil Dihapus');
    }
}
