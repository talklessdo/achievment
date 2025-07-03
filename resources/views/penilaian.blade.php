<x-layout>
<section id="penilaian" class="content-section">
    <h1 class="page-title">Input Penilaian</h1>
    
    <div class="form-grid">
        <div>
            <h3>Input Prestasi/Pelanggaran</h3>
            <form id="form-penilaian">
                <div class="form-group">
                    <label class="form-label">Pilih Siswa</label>
                    <select class="form-select" id="pilih-siswa" required>
                        <option value="">Pilih Siswa</option>
                        <option value="2023001">Ahmad Rizki (X-A)</option>
                        <option value="2023002">Siti Aminah (X-B)</option>
                        <option value="2023003">Budi Santoso (XI-A)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Jenis</label>
                    <select class="form-select" id="jenis-penilaian" required>
                        <option value="">Pilih Jenis</option>
                        <option value="prestasi">Prestasi</option>
                        <option value="pelanggaran">Pelanggaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" id="kategori-penilaian" required>
                        <option value="">Pilih Kategori</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-input" id="keterangan-penilaian" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Poin</label>
                    <input type="number" class="form-input" id="poin-penilaian" readonly>
                </div>
                <div class="form-group">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-input" id="tanggal-penilaian" required>
                </div>
                <button type="submit" class="btn">Simpan Penilaian</button>
            </form>
        </div>
    </div>

    <div class="table-container">
        <h3 style="padding: 20px; margin: 0; background: #f8f9fa; border-bottom: 1px solid #e0e0e0;">Riwayat Penilaian</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Siswa</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>Poin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tabel-penilaian">
                <tr>
                    <td>21/06/2025</td>
                    <td>Ahmad Rizki</td>
                    <td><span class="badge badge-success">Prestasi</span></td>
                    <td>Akademik</td>
                    <td>Juara 1 Olimpiade Matematika</td>
                    <td><span class="point-display point-positive">+15</span></td>
                    <td>
                        <button class="btn btn-danger" onclick="hapusPenilaian(1)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
</x-layout>