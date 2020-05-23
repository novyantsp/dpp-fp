<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Input Data Pasien Covid-19</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(session('submitFailed'))
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-inner--text">Gagal input data! {{session('submitFailed')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        @elseif(session('submitSuccess'))
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-inner--text">Berhasil input data!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        @endif
        <form method="post" action="{{ route('pasien.input-data.post') }}" id="main-form">
            @csrf
            <!-- Informasi Umum -->
            <h6 class="heading-small text-muted mb-4">Informasi Pasien</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label" for="input-id-Pasien">Kode Pasien</label>
                            <input type="text" id="input-kode-Pasien" class="form-control" placeholder=""
                                name="pasien_kode">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label" for="input-Nama-Pasien">Nama Pasien</label>
                            <input type="text" id="input-Nama-Pasien" class="form-control" placeholder=""
                                name="pasien_nama" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tanggal-lahir">Tanggal Lahir</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Select date" type="text"
                                    id="input_tgl_lahir" name="pasien_tgl_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label" for="input-usia">Usia</label>
                            <input type="number" max="1000" id="input-usia" class="form-control" placeholder=""
                                name="pasien_usia" value="0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-nomor-hp">Nomor HP</label>
                            <input type="number" id="input-nomor-hp" class="form-control" placeholder=""
                                name="pasien_tlp">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label" for="input-alamat">Alamat</label>
                            <input type="text" id="input-alamat" class="form-control" placeholder=""
                                name="pasien_alamat_lengkap">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Kabupaten/Kota</label>
                            <select class="form-control" name="kota" id="kota" data-toggle="select">
                                <option value=""></option>
                            </select>
                            <input type="hidden" name="kotaInput" id="kotaInput" value="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="kecamatan" data-toggle="select">
                                <option value=""></option>
                            </select>
                            <input type="hidden" name="pasien_kecamatan" id="kecamatanInput" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Kelurahan</label>
                            <select class="form-control" name="kelurahan" id="kelurahan" data-toggle="select">
                                <option value=""></option>
                            </select>
                            <input type="hidden" name="pasien_kelurahan" id="kelurahanInput" value="null">
                        </div>
                    </div>
                    {{--<div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tempat">Koordinat</label>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" id="koordinatPasien" class="form-control" placeholder=""
                                        name="pasien_koordinat" value="-7.256979,112.752045">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-icon btn-primary center-block w-auto" type="button"
                                        id="ambil-koordinat-pasien">
                                        <span class="btn-inner--text" id="ambil-koordinat-pasien-text">Ambil</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
               {{-- <div class="row">
                    <div class="col-lg">
                        <div id="locationPickerPasien" style="width: 100%; height: 480px;"></div>
                    </div>
                </div> <br>--}}
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-kriteria">Kriteria Kasus</label>
                            <select class="form-control" id="input-kriteria" name="kriteria" data-toggle="select">
                                <option value="">Pilih</option>
                                <option value="0">Sehat</option>
                                <option value="1">ODR (Orang dalam resiko)</option>
                                <option value="2">ODP Pantau</option>
                                <option value="3">ODP Meninggal</option>
                                <option value="4">ODP Selesai</option>
                                <option value="5">PDP Dirawat</option>
                                <option value="6">PDP Sehat</option>
                                <option value="7">PDP Meninggal</option>
                                <option value="8">CONFIRM Mandiri</option>
                                <option value="9">CONFIRM Dirawat</option>
                                <option value="10">CONFIRM Sembuh</option>
                                <option value="11">CONFIRM Meninggal</option>
                            </select>
                            <input type="hidden" name="pasien_kriteria" id="kriteriaPasien" value="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tanggal-masuk_rs">Tanggal Masuk RS</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Select date" type="text"
                                    id="input_tgl_masuk_rs" name="pasien_tgl_masuk_rs">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-rs">Rumah Sakit Tempat Dirawat</label>
                            <select name="rumahSakit" id="input-rs" class="form-control" data-toggle="select">
                                <option value="" selected>Pilih Rumah Sakit</option>
                                @foreach($rumahSakits ?? '' as $rumahSakit)
                                <option value="{{ $rumahSakit->id }}">{{ $rumahSakit->nama }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="pasien_rumah_sakit" id="inputRs" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tanggal-">Tanggal Mulai Gejala</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Select date" type="text"
                                    id="input_tgl_mulai_gejala" name="pasien_tgl_mulai_gejala">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label" for="input-gejala_pasien">Tanda Gejala</label>
                            <input type="text" id="input-gejala_pasien" class="form-control" placeholder=""
                                name="pasien_gejala" value="">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4" />
            <!-- Riwayat -->
            <h6 class="heading-small text-muted mb-4">Riwayat Perjalanan/ Pindah Lokasi (14 hari sebelum sakit)</h6>
            <div class="card">
                <div class="card-header text-right">
                    <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#riwayat"><i
                            class="mr-1 ni ni-fat-add"></i>Tambah Riwayat Perjalanan
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive py-4">
                        <table class="table table-flush table-dt-basic" data-orderopt="2,desc" id="tabelRiwayat">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Tempat</th>
                                    <th>Koordinat</th>
                                    <th>Keperluan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <!-- Orang Tanpa Gejala (OTG) -->
            <h6 class="heading-small text-muted mb-4">Informasi Orang Tanpa Gejala (OTG)</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div>
                        <label class="form-control-label" for="">Apakah terdapat riwayat kontak erat dengan kasus konfirmasi COVID-19?</label>
                        <br> <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <button class="btn btn-icon btn-primary center-block" type="button" id="yaKontak">
                            <span class="btn-inner--text">Ya</span>
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn-icon btn-danger center-block" type="button" id="tidakKontak">
                            <span class="btn-inner--text">Tidak</span>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="card" id="inputKontak" style="display: none;">
                <div class="card-header text-right">
                    <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#kontak"><i
                            class="mr-1 ni ni-fat-add"></i>Tambah Orang Tanpa Gejala (OTG)
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive py-4">
                        <table class="table table-flush table-dt-basic" data-orderopt="2,desc" id="tabelKontak">
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
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal input Riwayat-->
            <div class="modal fade bd-example-modal-lg" id="riwayat" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="riwayat">Tambah Riwayat Perjalanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form1" method="post" style="width:450px">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggal">Tanggal</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control datepicker" placeholder="Select date"
                                                    type="text" value="" id="tanggal" name="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jam">Jam</label>
                                            <input type="time" class="form-control timepicker" placeholder="" id="jam"
                                                name="jam">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tempat">Tempat</label>
                                            <input type="text" class="form-control" placeholder="" id="tempat"
                                                name="tempat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kabupaten/Kota</label>
                                            <select class="form-control" name="kota-perjalanan" id="kota-perjalanan"
                                                data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kotaPerjalananInput" id="kotaPerjalananInput"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kecamatan</label>
                                            <select class="form-control" name="kecamatan-perjalanan"
                                                id="kecamatan-perjalanan" data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kecamatanPerjalananInput"
                                                id="kecamatanPerjalananInput" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kelurahan</label>
                                            <select class="form-control" name="kelurahan-perjalanan"
                                                id="kelurahan-perjalanan" data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kelurahanPerjalananInput"
                                                id="kelurahanPerjalananInput" value="null">
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="form-group">
                                    <label class="form-control-label" for="input-tempat">Koordinat</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" id="koordinatRiwayat" class="form-control" placeholder=""
                                                name="koordinatRiwayat" value="-7.256979,112.752045">
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-icon btn-primary center-block w-100" type="button"
                                                id="ambil-koordinat-riwayat">
                                                <span class="btn-inner--text"
                                                    id="ambil-koordinat-riwayat-text">Ambil</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>--}}
                                {{--<div id="locationPickerRiwayat" style="width: 100%; height: 480px;"></div> <br>--}}
                                <div class="form-group">
                                    <label class="form-control-label" for="input-keperluan">Keperluan</label>
                                    <input type="text" class="form-control" placeholder="" id="keperluan"
                                        name="keperluan">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary" id="butsend">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal input Orang Tanpa Gejala (OTG) erat-->
            <div class="modal fade bd-example-modal-lg" id="kontak" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="kontak">Tambah Orang Tanpa Gejala (OTG)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form2" method="post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-kode-otg">Kode OTG/KE</label>
                                            <input type="text" class="form-control" placeholder="" id="kode-otg"
                                                   name="kode-otg">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nama">Nama</label>
                                            <input type="text" class="form-control" placeholder="" id="namaKontak"
                                                name="namaKontak">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-hubungan">Hubungan</label>
                                            <input type="text" class="form-control" placeholder="" id="hubungan"
                                                   name="hubungan">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kategoriKE">Kategori OTG</label>
                                            <select class="form-control" id="kategoriKE" name="kategoriKE">
                                                <option value="{{ \App\Utilities\Constants::KATEGORI_TANPA_GEJALA }}">
                                                    Tanpa Gejala</option>
                                                <option value="{{ \App\Utilities\Constants::KATEGORI_RINGAN }}">Ringan
                                                </option>
                                                <option value="{{ \App\Utilities\Constants::KATEGORI_SEDANG }}">Sedang
                                                </option>
                                                <option value="{{ \App\Utilities\Constants::KATEGORI_BERAT }}">Berat
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-alamat">Alamat</label>
                                            <input type="text" class="form-control" placeholder="" id="alamatKE"
                                                name="alamatKE">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kabupaten/Kota</label>
                                            <select class="form-control" name="kota-ke" id="kota-ke"
                                                data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kotaKeInput" id="kotaKeInput" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kecamatan</label>
                                            <select class="form-control" name="kecamatan-ke" id="kecamatan-ke"
                                                data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kecamatanKeInput" id="kecamatanKeInput" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kelurahan</label>
                                            <select class="form-control" name="kelurahan-ke" id="kelurahan-ke"
                                                data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kelurahanKeInput" id="kelurahanKeInput"
                                                value="null">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nomor">No.HP</label>
                                            <input type="number" class="form-control" placeholder="" id="nohp"
                                                name="nohp">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggal">Tanggal Kontak
                                                Terakhir</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control datepicker" placeholder="Select date"
                                                    type="text" value="" id="tanggalKontak" name="tanggalKontak">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-lokasi">Lokasi Bertemu</label>
                                            <input type="text" class="form-control" placeholder="" id="lokasiBertemu"
                                                name="lokasiBertemu">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kabupaten/Kota</label>
                                            <select class="form-control" name="kota-hubung" id="kota-hubung"
                                                data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kotaHubungInput" id="kotaHubungInput" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kecamatan</label>
                                            <select class="form-control" name="kecamatan-hubung" id="kecamatan-hubung"
                                                data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kecamatanHubungInput" id="kecamatanHubungInput"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Kelurahan</label>
                                            <select class="form-control" name="kelurahan-hubung" id="kelurahan-hubung"
                                                data-toggle="select">
                                                <option value=""></option>
                                            </select>
                                            <input type="hidden" name="kelurahanHubungInput" id="kelurahanHubungInput"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="form-group">
                                    <label class="form-control-label" for="input-tempat">Koordinat</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" id="koordinatKontak" class="form-control" placeholder=""
                                                name="koordinatKontak" value="-7.256979,112.752045">
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-icon btn-primary center-block w-100" type="button"
                                                id="ambil-koordinat-kontak">
                                                <span class="btn-inner--text"
                                                    id="ambil-koordinat-kontak-text">Ambil</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>--}}
                                {{--<div id="locationPickerKontak" style="width: 100%; height: 480px;"></div> <br>--}}
                                <hr class="my-4" />
                                <!-- Gejala -->
                                <h5 class="heading-small text-muted mb-4">Gejala yang Timbul</h5>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <input type="text" id="gejala" class="form-control" placeholder=""
                                                    name="gejala">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input class="form-control datepicker" placeholder="Tanggal mulai gejala"
                                                       type="text" value="" id="tanggalGejalaOtg" name="tanggalGejalaOtg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h5 class="heading-small text-muted mb-4">Apakah Ada Penyakit Penyerta/Kehamilan?</h5>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-primary center-block" type="button"
                                                id="yaPenyakit">
                                                <span class="btn-inner--text">Ya</span>
                                            </button>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-danger center-block" type="button"
                                                id="tidakPenyakit">
                                                <span class="btn-inner--text">Tidak</span>
                                            </button>
                                        </div>
                                        <input type="hidden" name="penyerta" id="penyerta" value="-1">
                                    </div>
                                </div>
                                </br>
                                <div class="pl-lg-4" id="inputPenyakit" style="display:none">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <input type="text" id="penyakit" class="form-control"
                                                    placeholder="Tulis Hamil/Masukkan Penyakit Penyerta"
                                                    name="penyakit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Isolasi -->
                                <h5 class="heading-small text-muted mb-4">Apakah Pasien Diisolasi?</h5>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-primary center-block" type="button"
                                                id="yaIsolasi">
                                                <span class="btn-inner--text">Ya</span>
                                            </button>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-danger center-block" type="button"
                                                id="tidakIsolasi">
                                                <span class="btn-inner--text">Tidak</span>
                                            </button>
                                        </div>
                                        <input type="hidden" name="isolasi" id="isolasi" value="-1">
                                    </div>
                                </div>
                                </br>
                                <div class="pl-lg-4" id="inputIsolasi" style="display: none">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-tempat">Tempat</label>
                                                <input type="text" id="tempatIsolasi" class="form-control"
                                                    placeholder="" name="tempatIsolasi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-tempat">Alamat</label>
                                                <input type="text" id="alamatIsolasi" class="form-control"
                                                    placeholder="" name="alamatIsolasi">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Kabupaten/Kota</label>
                                                <select class="form-control" name="kota-isolasi" id="kota-isolasi"
                                                    data-toggle="select">
                                                    <option value=""></option>
                                                </select>
                                                <input type="hidden" name="kotaIsolasiInput" id="kotaIsolasiInput"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Kecamatan</label>
                                                <select class="form-control" name="kecamatan-isolasi"
                                                    id="kecamatan-isolasi" data-toggle="select">
                                                    <option value=""></option>
                                                </select>
                                                <input type="hidden" name="kecamatanIsolasiInput"
                                                    id="kecamatanIsolasiInput" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Kelurahan</label>
                                                <select class="form-control" name="kelurahan-isolasi"
                                                    id="kelurahan-isolasi" data-toggle="select">
                                                    <option value=""></option>
                                                </select>
                                                <input type="hidden" name="kelurahanIsolasiInput"
                                                    id="kelurahanIsolasiInput" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-instansi">Instansi
                                                    Terlibat</label>
                                                <input type="text" id="instansi" class="form-control" placeholder=""
                                                    name="instansi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Riwayat -->
                                <h5 class="heading-small text-muted mb-4">Apakah Dirawat di Rumah Sakit?
                                </h5>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-primary center-block" type="button"
                                                id="yaDirawat">
                                                <span class="btn-inner--text">Ya</span>
                                            </button>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-danger center-block" type="button"
                                                id="tidakDirawat">
                                                <span class="btn-inner--text">Tidak</span>
                                            </button>
                                        </div>
                                        <input type="hidden" name="dirawat-rs" id="dirawat-rs" value="-1">
                                    </div>
                                </div>
                                </br>
                                <div class="pl-lg-4" id="inputDirawat" style="display: none">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <select name="rsDirawat" id="rsDirawat" class="form-control"
                                                    data-toggle="select" placeholder="Rumah Sakit yang Terlibat">
                                                    <option value="" selected>Pilih Rumah Sakit</option>
                                                    @foreach($rumahSakits ?? '' as $rumahSakit)
                                                    <option value="{{ $rumahSakit->id }}">{{ $rumahSakit->nama }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Spesimen -->
                                <h5 class="heading-small text-muted mb-4">Pengambilan Rapid Test</h5>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-primary center-block" type="button"
                                                id="yaRapid">
                                                <span class="btn-inner--text">Ya</span>
                                            </button>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-danger center-block" type="button"
                                                id="tidakRapid">
                                                <span class="btn-inner--text">Tidak</span>
                                            </button>
                                        </div>
                                        <input type="hidden" name="rapid-test" id="rapid-test" value="0">
                                    </div>
                                </div>
                                <br>
                                <div class="pl-lg-4" id="inputRapidTest" style="display: none">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-tanggal-ambil">Pengambilan
                                                    Rapid Test 1</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-calendar-grid-58"></i></span>
                                                    </div>
                                                    <input class="form-control datepicker" placeholder="Select date"
                                                        type="text" value="" name="tanggalAmbil3" id="tanggalAmbil3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-keterangan3">Keterangan</label>
                                                <select class="form-control" id="keterangan3" name="keterangan3">
                                                    <option value="0">Negatif</option>
                                                    <option value="1">Positif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-tanggal-ambil">Pengambilan
                                                    Rapid Test 2</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-calendar-grid-58"></i></span>
                                                    </div>
                                                    <input class="form-control datepicker" placeholder="Select date"
                                                        type="text" value="" name="tanggalAmbil4" id="tanggalAmbil4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-keterangan4">Keterangan</label>
                                                <select class="form-control" id="keterangan4" name="keterangan4">
                                                    <option value="0">Negatif</option>
                                                    <option value="1">Positif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Spesimen -->
                                <h5 class="heading-small text-muted mb-4">Pengambilan Spesimen (PCR)</h5>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-primary center-block" type="button"
                                                    id="yaSpesimen">
                                                <span class="btn-inner--text">Ya</span>
                                            </button>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-icon btn-danger center-block" type="button"
                                                    id="tidakSpesimen">
                                                <span class="btn-inner--text">Tidak</span>
                                            </button>
                                        </div>
                                        <input type="hidden" name="spesimen" id="spesimen" value="0">
                                    </div>
                                </div>
                                <br>
                                <div class="pl-lg-4" id="inputSpesimen" style="display: none">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-tanggal-ambil">Pengambilan
                                                    Spesimen 1</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-calendar-grid-58"></i></span>
                                                    </div>
                                                    <input class="form-control datepicker" placeholder="Select date"
                                                           type="text" value="" name="tanggalAmbil1" id="tanggalAmbil1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-keterangan1">Keterangan</label>
                                                <select class="form-control" id="keterangan1" name="keterangan1">
                                                    <option value="0">Negatif</option>
                                                    <option value="1">Positif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-tanggal-ambil">Pengambilan
                                                    Spesimen 2</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-calendar-grid-58"></i></span>
                                                    </div>
                                                    <input class="form-control datepicker"
                                                           placeholder="specimen kedua diambil 14 hari setelah specimen pertama."
                                                           type="text" value="" name="tanggalAmbil2" id="tanggalAmbil2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-keterangan2">Keterangan</label>
                                                <select class="form-control" id="keterangan2" name="keterangan2">
                                                    <option value="0">Negatif</option>
                                                    <option value="1">Positif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-4" id="alasan-spesimen" style="display: none">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-alasan">Alasan</label>
                                                <textarea class="form-control" id="alasan" name="alasan"
                                                          rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Riwayat -->
                                <h5 class="heading-small text-muted mb-4">Kondisi Terakhir Setelah
                                    14 Hari</h5>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-kondisi">Kondisi</label>
                                                <select class="form-control" id="kondisi" name="kondisi">
                                                    <option value="1">Sehat</option>
                                                    <option value="2">Sakit</option>
                                                    <option value="3">Meninggal</option>
                                                    <option value="4">Tidak ada keterangan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-pemantau">Tim Pemantau
                                                    Selanjutnya</label>
                                                <input type="text" id="pemantau" class="form-control" placeholder=""
                                                    name="pemantau" value="{{ $userOps->getUserName() }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-keterangan">Keterangan</label>
                                                <textarea class="form-control" id="keterangan" name="keterangan"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary" id="butKirim">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Submit -->
            <div class="card-header text-right">
                <button class="btn btn-primary" type="submit" form="main-form" id="btn-save">Submit</button>
            </div>
        </form>
    </div>
</div>
