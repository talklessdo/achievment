<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\PenilaianSiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSiswa = DataSiswa::all();
        $jmlSiswa = DataSiswa::count();
        $jmlPrestasi = PenilaianSiswa::where('jenis', 'prestasi')->count();
        $jmlMasalah = PenilaianSiswa::where('jenis', 'pelanggaran')->count();
        return view(
            'dashboard',
            compact(
                'dataSiswa',
                'jmlSiswa',
                'jmlPrestasi',
                'jmlMasalah'
                )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function landingPage()
    {
        return view('landingpage');
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
