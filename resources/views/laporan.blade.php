<x-layout>
    <section id="laporan" class="content-section">
        <h1 class="page-title">Laporan</h1>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">
                    {{ fmod($presentasePrestasi, 1) == 0 ? intval($presentasePrestasi) : number_format($presentasePrestasi, 2) }}%
                </div>
                <div class="stat-label">Siswa Berprestasi</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">
                    {{ fmod($presentaseMasalah, 1) == 0 ? intval($presentaseMasalah) : number_format($presentaseMasalah, 2) }}%
                </div>
                <div class="stat-label">Siswa Bermasalah</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $jmlPrestasi }}</div>
                <div class="stat-label">Total Prestasi</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $jmlMasalah }}</div>
                <div class="stat-label">Total Pelanggaran</div>
            </div>
        </div>

        <div class="form-grid">
            <div>
                <h3>Filter Laporan</h3>
                <div class="form-group">
                    <label class="form-label">Periode</label>
                    <select class="form-select" id="periode-laporan">
                        <option value="bulan-ini">Bulan Ini</option>
                        <option value="semester">Semester</option>
                        <option value="tahun">Tahun Ajaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Kelas</label>
                    <select class="form-select" id="kelas-laporan">
                        <option value="semua">Semua Kelas</option>
                        <option value="X-A">X-A</option>
                        <option value="X-B">X-B</option>
                        <option value="XI-A">XI-A</option>
                        <option value="XI-B">XI-B</option>
                    </select>
                </div>
                <button class="btn" onclick="generateLaporan()">Generate Laporan</button>
                <button class="btn btn-success" onclick="exportLaporan()">Export Excel</button>
            </div>
        </div>

        <div class="table-container">
            <h3 style="padding: 20px; margin: 0; background: #f8f9fa; border-bottom: 1px solid #e0e0e0;">Ranking Siswa</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Ranking</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Total Poin</th>
                        <th>Prestasi</th>
                        <th>Pelanggaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="tabel-ranking">
                    <tr>
                        <td>🥇 1</td>
                        <td>Ahmad Rizki</td>
                        <td>X-A</td>
                        <td><span class="point-display point-positive">+25</span></td>
                        <td>3</td>
                        <td>0</td>
                        <td><span class="badge badge-success">Terbaik</span></td>
                    </tr>
                    <tr>
                        <td>🥈 2</td>
                        <td>Budi Santoso</td>
                        <td>XI-A</td>
                        <td><span class="point-display point-positive">+18</span></td>
                        <td>2</td>
                        <td>0</td>
                        <td><span class="badge badge-success">Baik</span></td>
                    </tr>
                    <tr>
                        <td>🥉 3</td>
                        <td>Dewi Lestari</td>
                        <td>X-B</td>
                        <td><span class="point-display point-positive">+12</span></td>
                        <td>2</td>
                        <td>1</td>
                        <td><span class="badge badge-success">Baik</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layout>