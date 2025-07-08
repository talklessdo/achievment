<x-layout title="Dashboard">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
    
    <style>
        #myTable {
            width: 100%;
            table-layout: fixed; /* Prevents column width from expanding */
        }

    </style>
    <section id="home" class="content-section active">
        <h1 class="page-title">Dashboard Utama</h1>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number" id="total-siswa">{{ $jmlSiswa }}</div>
                <div class="stat-label">Total Siswa</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="prestasi-bulan">{{ $jmlPrestasi }}</div>
                <div class="stat-label">Prestasi Bulan Ini</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="pelanggaran-bulan">{{ $jmlMasalah }}</div>
                <div class="stat-label">Pelanggaran Bulan Ini</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="rata-poin">+8.5</div>
                <div class="stat-label">Rata-rata Poin</div>
            </div>
        </div>

        <div class="table-container">
            <h3 style="padding: 20px; margin: 0; background: #f8f9fa; border-bottom: 1px solid #e0e0e0;">Aktivitas Terbaru</h3>
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="text-align: left;">NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody id="recent-activities">
                    @foreach ($dataSiswa as $nomor => $data)
                    @php
                        $nomor += 1;
                    @endphp
                        
                    <tr>
                        <td>{{ $nomor }}</td>
                        <td style="text-align: left;">{{ $data->nis }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kelas }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable', {
        ordering: false  
    });
</script>
</x-layout>