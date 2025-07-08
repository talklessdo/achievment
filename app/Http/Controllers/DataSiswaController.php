<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSiswa = DataSiswa::all();
        return view('data_siswa', compact('dataSiswa'));
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
        $validated = $request->validate([
        'nama' => 'required|string|max:100',
        'nis' => 'required|string|unique:data_siswa,nis|digits:7',
        'kelas' => 'required|in:X,XI,XII',
        ], [
            'nama.required' => 'Nama siswa wajib diisi.',
            'nis.required' => 'NIS tidak boleh kosong.',
            'nis.unique' => 'NIS sudah terdaftar.',
            'nis.digits' => 'NIS harus berupa 7 digit angka.',
            'kelas.required' => 'Silakan pilih kelas siswa.',
            'kelas.in' => 'Kelas tidak valid.',
        ]);

        // Simpan data siswa ke database
        // DataSiswa::create($validated);

        $validated['nis'] =  '131232750027' . $validated['nis'];
        DataSiswa::create([
            'nama' => $validated['nama'],
            'nis' => $validated['nis'],
            'kelas' => $validated['kelas'],
            'status' => '',
        ]);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan.');
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
