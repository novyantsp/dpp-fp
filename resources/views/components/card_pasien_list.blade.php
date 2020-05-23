<script>
    var pasiens = <?php echo json_encode($pasiens) ?>;
    // var pasiens_data = JSON.parse(pasiens);
</script>
<div class="card">
    <div class="card-body">
        @if(session('deletePasienFailed'))
            <br>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-inner--text">Gagal hapus data!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @elseif(session('deletePasienSuccess'))
            <br>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--text">Berhasil hapus data!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="no">No</th>
                            <th scope="col" class="sort" data-sort="kode">Kode</th>
                            <th scope="col" class="sort" data-sort="nama">Nama Pasien</th>
                            <th scope="col" class="sort" data-sort="usia">Usia</th>
                            <th scope="col" class="sort" data-sort="nomor-hp">No.HP</th>
                            <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                            <th scope="col" class="sort" data-sort="kriteria">Kriteria Kasus</th>
                            <th scope="col" class="sort" data-sort="rumah-sakit">Rumah Sakit</th>
                            <th scope="col" class="sort" data-sort="created-at">Created At</th>
                            <th scope="col" class="sort" data-sort="updated-at">Updated At</th>
                            {{--<th scope="col" class="sort" data-sort="tempat-dirawat">Tempat Dirawat</th>
                            <th scope="col" class="sort" data-sort="kondisi-terakhi">Kondisi Terakhir</th>--}}
                            <th scope="col" class="sort" data-sort="aksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($pasiens as $pasien)
                         <tr>
                            <td>{{ $pasienCount++ }}</td>
                            <td>{{ $pasien->kode ?? '-' }}</td>
                            <td>{{ $pasien->nama ?? '-' }}</td>
                            <td>{{ $pasien->usia ?? '-' }}</td>
                            <td>{{ $pasien->telp ?? '-' }}</td>
                            <td>{{ $pasien->alamat ?? '-' }}</td>
                            <td>{{ $pasien->kriteria_kasus ?? '-' }}</td>
                            <td>{{ $pasien->rumah_sakit ?? '-' }}</td>
                             <td>{{ $pasien->created_at ?? '-' }}</td>
                             <td>{{ $pasien->updated_at ?? '-' }}</td>
                            {{--<td></td>--}}
                            <td><button type="button" class="btn btn-icon btn-default btn-sm riwayat-perjalanan" id="riwayat-perjalanan{{ $pasien->id }}" data-toggle="modal"
                                    data-target="#riwayat-perjalanan">Riwayat Perjalanan</button>
                                <button type="button" class="btn btn-icon btn-primary btn-sm daftar-otg" id="daftar-otg{{ $pasien->id }}" data-toggle="modal"
                                    data-target="#kontak-erat"></i>Daftar KE/OTG</button>
                                <a href="{{ route('pasien.detail.show', ['pasienId' => $pasien->id]) }}" class="btn btn-icon btn-info btn-sm"></i>Detail</a>
                                <a href="{{ route('pasien.edit.show', ['pasienId' => $pasien->id]) }}" class="btn btn-icon btn-warning btn-sm"></i>Edit</a>

                                <button type="button" class="btn btn-icon btn-danger btn-sm hapus-pasien" data-toggle="modal"
                                    data-target="#hapus" id="hapus-pasien{{ $pasien->id }}"></i>Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Modal Daftar Riwayat Perjalanan-->
            <div class="modal fade bd-example-modal-xl" id="riwayat-perjalanan" tabindex="-1" role="dialog"
                aria-labelledby="user" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="user"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <h2 class="text-center">Daftar Riwayat Perjalanan</h2>
                        <h2 class="text-center" id="nama-daftar-perjalanan"></h2>
                            <div class="table-responsive py-4">
                                <table class="table table-flush table-dt-basic" data-orderopt="2,desc"
                                    id="tabelRiwayat">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Tempat</th>
                                            <th>Koordinat</th>
                                            <th>Keperluan</th>
                                        </tr>
                                    </thead>

                                    <tbody id="barisRiwayat">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Daftar Kontak Erat-->
            <div class="modal fade bd-example-modal-xl" id="kontak-erat" tabindex="-1" role="dialog"
                aria-labelledby="user" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="user"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <h2 class="text-center">Daftar OTG/KE</h2>
                        <h2 class="text-center" id="nama-daftar-otg"></h2>
                            <div class="table-responsive py-4">
                                <table class="table table-flush table-dt-basic" data-orderopt="2,desc"
                                    id="tabelKontakErat">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Hubungan</th>
                                            <th>Kategori KE/OTG</th>
                                            <th>Alamat</th>
                                            <th>No.HP</th>
                                            <th>Tanggal Kontak Terakhir</th>
                                            <th>Lokasi Bertemu</th>
                                            <th>Gejala</th>
                                            <th>Tanggal Mulai Gejala</th>
                                            <th>Penyakit Penyerta</th>
                                            <th>Tempat Isolasi</th>
                                            <th>Alamat Isolasi</th>
                                            <th>Instansi Terlibat Isolasi</th>
                                            <th>RS yang Terlibat</th>
                                            <th>Pengambilan Rapid Test 1</th>
                                            <th>Keterangan Rapid Test 1</th>
                                            <th>Pengambilan Rapid Test 2</th>
                                            <th>Keterangan Rapid Test 2</th>
                                            <th>Pengambilan Spesimen 1</th>
                                            <th>Keterangan Spesimen 1</th>
                                            <th>Pengambilan Spesimen 2</th>
                                            <th>Keterangan Spesimen 2</th>
                                            <th>Alasan Spesimen</th>
                                            <th>Kondisi</th>
                                            <th>Tim Pemantau Selanjutnya</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="barisOtg">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus User-->
            <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="hapus">Hapus Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h3>Apakah anda yakin untuk menghapus Pasien ini?</h3>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <a href="#" id="btn-hapus"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
