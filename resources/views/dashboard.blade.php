<x-layout>
    <section id="home" class="content-section active">
        <h1 class="page-title">Dashboard Utama</h1>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number" id="total-siswa">156</div>
                <div class="stat-label">Total Siswa</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="prestasi-bulan">28</div>
                <div class="stat-label">Prestasi Bulan Ini</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="pelanggaran-bulan">12</div>
                <div class="stat-label">Pelanggaran Bulan Ini</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="rata-poin">+8.5</div>
                <div class="stat-label">Rata-rata Poin</div>
            </div>
        </div>

        <div class="table-container">
            <h3 style="padding: 20px; margin: 0; background: #f8f9fa; border-bottom: 1px solid #e0e0e0;">Aktivitas Terbaru</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Siswa</th>
                        <th>Jenis</th>
                        <th>Keterangan</th>
                        <th>Poin</th>
                    </tr>
                </thead>
                <tbody id="recent-activities">
                    <tr>
                        <td>21/06/2025</td>
                        <td>Ahmad Rizki</td>
                        <td><span class="badge badge-success">Prestasi</span></td>
                        <td>Juara 1 Olimpiade Matematika</td>
                        <td><span class="point-display point-positive">+15</span></td>
                    </tr>
                    <tr>
                        <td>20/06/2025</td>
                        <td>Siti Aminah</td>
                        <td><span class="badge badge-danger">Pelanggaran</span></td>
                        <td>Terlambat masuk kelas</td>
                        <td><span class="point-display point-negative">-5</span></td>
                    </tr>
                    <tr>
                        <td>19/06/2025</td>
                        <td>Budi Santoso</td>
                        <td><span class="badge badge-success">Prestasi</span></td>
                        <td>Membantu teman yang kesulitan</td>
                        <td><span class="point-display point-positive">+8</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layout>