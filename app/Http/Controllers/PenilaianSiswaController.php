<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\PenilaianSiswa;
use Illuminate\Http\Request;

class PenilaianSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSiswa = DataSiswa::all();
        $penilaianSiswa = PenilaianSiswa::all();
        return view('penilaian', compact('dataSiswa', 'penilaianSiswa'));
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
    public function stores(Request $request){
        dd($request->all());
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
        'siswa_id' => 'required|exists:data_siswa,id',
        'nama_siswa' => 'required',
        'jenis' => 'required|in:prestasi,pelanggaran',
        'kategori' => 'required|in:akademik,nonakademik',
        'keterangan' => 'required|string|max:255',
        'poin' => 'required|integer',
        'tanggal' => 'required|date',
        ], [
            'nama_siswa.required' => 'Silakan pilih siswa.',
            'siswa_id.exists' => 'Siswa tidak ditemukan.',
            'siswa_id.required' => 'Siswa tidak .',
            'jenis.required' => 'Jenis penilaian harus dipilih.',
            'jenis.in' => 'Jenis penilaian tidak valid.',
            'kategori.required' => 'Kategori penilaian harus dipilih.',
            'kategori.in' => 'Kategori tidak valid.',
            'keterangan.required' => 'Keterangan wajib diisi.',
            'keterangan.max' => 'Keterangan maksimal 255 karakter.',
            'poin.required' => 'Poin wajib diisi.',
            'poin.integer' => 'Poin harus berupa angka.',
            'tanggal.required' => 'Tanggal wajib diisi.',
            'tanggal.date' => 'Format tanggal tidak valid.',
        ]);

        PenilaianSiswa::create($validated);

        return redirect()->back()->with('success', 'Data penilaian berhasil disimpan.');
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
