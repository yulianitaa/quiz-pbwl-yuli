<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Pelanggan;
use App\Models\Users;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('pelanggan.create',[
            'golongan' => Golongan::get(),
            'users' => Users::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create(
            [
                'pel_id_gol' => $request->pel_id_gol,
                'pel_id_user' => $request->pel_id_user,
                'pel_no' => $request->pel_no,
                'pel_nama' => $request->pel_nama,
                'pel_alamat' => $request->pel_alamat,
                'pel_hp' => $request->pel_hp
            ]
        );

        return redirect('pelanggan')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit',[
            'golongan' => Golongan::get(),
            'users' => Users::get()
        ],
        compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->update(
            [
                'pel_id_gol' => $request->pel_id_gol,
                'pel_id_user' => $request->pel_id_user,
                'pel_no' => $request->pel_no,
                'pel_nama' => $request->pel_nama,
                'pel_alamat' => $request->pel_alamat,
                'pel_hp' => $request->pel_hp
            ]
        );
        return redirect('pelanggan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan')->with('success', 'Data berhasil dihapus');
    }
}
