<x-layout>
    <section id="data-siswa" class="content-section">
        <h1 class="page-title">Data Siswa</h1>
        
        <div class="form-grid">
            <div>
                <h3>Tambah Siswa Baru</h3>
                <form id="form-siswa">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-input" id="nama-siswa" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIS</label>
                        <input type="text" class="form-input" id="nis-siswa" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Kelas</label>
                        <select class="form-select" id="kelas-siswa" required>
                            <option value="">Pilih Kelas</option>
                            <option value="X-A">X-A</option>
                            <option value="X-B">X-B</option>
                            <option value="XI-A">XI-A</option>
                            <option value="XI-B">XI-B</option>
                            <option value="XII-A">XII-A</option>
                            <option value="XII-B">XII-B</option>
                        </select>
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
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Total Poin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tabel-siswa">
                    <tr>
                        <td>2023001</td>
                        <td>Ahmad Rizki</td>
                        <td>X-A</td>
                        <td><span class="point-display point-positive">+25</span></td>
                        <td><span class="badge badge-success">Baik</span></td>
                        <td>
                            <button class="btn btn-success" onclick="editSiswa('2023001')">Edit</button>
                            <button class="btn btn-danger" onclick="hapusSiswa('2023001')">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2023002</td>
                        <td>Siti Aminah</td>
                        <td>X-B</td>
                        <td><span class="point-display point-negative">-5</span></td>
                        <td><span class="badge badge-warning">Perhatian</span></td>
                        <td>
                            <button class="btn btn-success" onclick="editSiswa('2023002')">Edit</button>
                            <button class="btn btn-danger" onclick="hapusSiswa('2023002')">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layout>