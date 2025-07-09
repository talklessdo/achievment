<x-layout title="Laporan">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
    <style>
        #myTable {
            width: 100%;
            table-layout: fixed; /* Prevents column width from expanding */
            
        }

        .badge-primary {
            background-color: #0056b3 !important; /* Biru gelap */
            color: #ffffff !important;
        }


    </style>
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
                <button class="btn btn-success" onclick="exportLaporan()">Cetak Laporan</button>
            </div>
        </div>

        <div class="table-container" style="padding-left: 10px; padding-right: 10px;">
            <h3 style="padding: 20px; margin: 0; background: #f8f9fa; border-bottom: 1px solid #e0e0e0;">Ranking Siswa</h3>
            <table class="table" id="myTable">
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
                    @foreach ($dataSiswa as $rank => $data)
                        @php
                            $rank += 1;
                        @endphp
                    <tr>
                        <td>
                            @if ($rank == 1)
                                🥇 {{ $rank }}
                            @elseif ($rank == 2)
                                🥈 {{ $rank }}
                            @elseif ($rank == 3)
                                🥉 {{ $rank }}
                            @else
                                
                            @endif
                        </td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td><span class="point-display point-{{ $data->total_poin >= 0 ? 'positive' : 'negative' }}">{{ $data->total_poin }}</span></td>
                        <td>{{ $data->total_prestasi }}</td>
                        <td>{{ $data->total_pelanggaran }}</td>
                        <td>
                            @php
                                $poin = $data->total_poin;
                                if ($poin >= 80) {
                                    $status = ['label' => 'Teladan', 'badge' => 'success'];
                                } elseif ($poin >= 50) {
                                    $status = ['label' => 'Baik', 'badge' => 'primary'];
                                } elseif ($poin >= 20) {
                                    $status = ['label' => 'Cukup', 'badge' => 'warning'];
                                } else {
                                    $status = ['label' => 'Perhatian', 'badge' => 'danger'];
                                }
                            @endphp

                            <span class="badge badge-{{ $status['badge'] }}">
                                {{ $status['label'] }}
                            </span>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
    <script>

        function exportLaporan(){
            window.open('/laporan_pdf', '_blank');
        }
        let table = new DataTable('#myTable', {
            ordering: false  
        });
    </script>
</x-layout>