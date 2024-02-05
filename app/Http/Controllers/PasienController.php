<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::all();
        return view('datapasien', ['pasien'=>$pasien]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahpasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pasien::create([
            'id' => $request ->id,
            'kategori' => $request ->kategori,
            'nama' => $request ->nama,
            'usia' => $request ->usia,
            'alamat' => $request ->alamat
        ]);
            return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::find($id);
        return view('detailpasien', ['pasien' => $pasien]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        return view('editpasien', ['pasien' => $pasien]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pasien::find($id)->update([
            'kategori' => $request ->kategori,
            'nama' => $request ->nama,
            'usia' => $request ->usia,
            'alamat' => $request ->alamat
        ]);
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pasien::find($id) -> delete();
        return redirect() -> route('pasien.index');
    }
}
