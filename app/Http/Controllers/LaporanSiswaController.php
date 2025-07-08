<?php

namespace App\Http\Controllers;

use App\Models\PenilaianSiswa;
use Illuminate\Http\Request;

class LaporanSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalSiswa = PenilaianSiswa::count();
        $jmlPrestasi = PenilaianSiswa::where('jenis','prestasi')->count();
        $jmlMasalah = PenilaianSiswa::where('jenis','pelanggaran')->count();
        $presentasePrestasi = $totalSiswa > 0 ? ($jmlPrestasi / $totalSiswa) * 100 : 0;
        $presentaseMasalah = $totalSiswa > 0 ? ($jmlMasalah / $totalSiswa) * 100 : 0;
        return view('laporan', compact(
            'presentasePrestasi', 
            'presentaseMasalah',
            'jmlPrestasi',
            'jmlMasalah',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
