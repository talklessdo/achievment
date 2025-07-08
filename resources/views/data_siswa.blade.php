<x-layout title="Data Siswa">
    <section id="data-siswa" class="content-section">
        <h1 class="page-title">Data Siswa</h1>
        
        <div class="form-grid">
            <div>
                <h3>Tambah Siswa Baru</h3>
                <form id="form-siswa" action="{{ route('siswa.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-input" id="nama-siswa" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">NIS</label>
                        <input type="text" maxlength="7" class="form-input" id="nis-siswa" name="nis" value="{{ old('nis') }}">
                        @error('nis')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kelas</label>
                        <select class="form-select" id="kelas-siswa" name="kelas">
                            <option value="">Pilih Kelas</option>
                            <option value="X" {{ old('kelas') == 'X' ? 'selected' : '' }}>X</option>
                            <option value="XI" {{ old('kelas') == 'XI' ? 'selected' : '' }}>XI</option>
                            <option value="XII" {{ old('kelas') == 'XII' ? 'selected' : '' }}>XII</option>
                        </select>
                        @error('kelas')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn">Tambah Siswa</button>
                </form>

            </div>
        </div>

        <div class="table-container">
            <h3 style="padding: 20px; margin: 0; background: #f8f9fa; border-bottom: 1px solid #e0e0e0;">Daftar Siswa</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tabel-siswa">
                    @foreach ($dataSiswa as $nomor => $data)
                    @php $nomor += 1; @endphp
                    <tr>
                        <td>{{ $nomor }}</td>
                        <td>{{ $data->nis }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td>
                            <button class="btn btn-success" onclick="editSiswa('2023001')">Edit</button>
                            <button class="btn btn-danger" onclick="hapusSiswa('2023001')">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>