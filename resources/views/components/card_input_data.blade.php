<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Input Data Pasien</h3>
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
        <form method="post" action="{{ route('pasien.store') }}" id="main-form">
            @csrf
            <!-- Informasi Umum -->
            <h6 class="heading-small text-muted mb-4">Informasi Pasien</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label" for="input-Nama-Pasien">Nama Pasien</label>
                            <input type="text" id="input-Nama-Pasien" class="form-control" placeholder="" name="nama">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label" for="input-id-Pasien">Kode RM</label>
                            <input type="text" id="input-kode-Pasien" class="form-control" placeholder="" name="no_rm">
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
                                    id="input_tgl_lahir" name="birth">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label" for="input-usia">Usia</label>
                            <input type="number" max="1000" id="input-usia" class="form-control" placeholder=""
                                name="usia" value="0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-alamat">Alamat</label>
                            <input type="text" id="input-alamat" class="form-control" placeholder="" name="alamat">
                        </div>
                    </div>
                </div>
                <!--<div class="card-header text-right">
                    <button class="btn btn-primary" type="submit" id="btn-save">Submit</button>
                </div>-->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tanggal-asesmen">Tanggal Asesmen</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Select date" type="text"
                                    id="input_tgl_asesmen" name="pasien_tgl_asesmen">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="heading-small text-muted mb-4">Data Medis</h6>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Anamnesis</h6>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-keluhan">Keluhan Sekarang</label>
                            <input type="text" id="input-keluhan" class="form-control" placeholder=""
                                name="pasien_keluhan">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-riwayat-penyakit">Riwayat Penyakit
                                Sekarang</label>
                            <input type="text" id="input-riwayat-penyakit" class="form-control" placeholder=""
                                name="pasien_riwayat-penyakit">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-riwayat-pengobatan">Riwayat Pengobatan</label>
                            <input type="text" id="input-riwayat-pengobatan" class="form-control" placeholder=""
                                name="pasien_riwayat-pengobatan">
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="heading-small text-muted mb-4">Pemeriksaan Fisik</h6>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Mata</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-anemia">Anemia</label>
                            <input type="text" id="input-anemia" class="form-control" placeholder=""
                                name="pasien_anemia">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-ikterus">Ikterus</label>
                            <input type="text" id="input-ikterus" class="form-control" placeholder=""
                                name="pasien_ikterus">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Reflek Pupil</label>
                            <input type="text" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="pasien_reflek_pupil">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-edema">Edema Palprebae</label>
                            <input type="text" id="input-edema" class="form-control" placeholder="" name="pasien_edema">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">THT</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tonsil">Anemia</label>
                            <input type="text" id="input-tonsil" class="form-control" placeholder=""
                                name="pasien_tonsil">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-faring">Faring</label>
                            <input type="text" id="input-faring" class="form-control" placeholder=""
                                name="pasien_faring">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-lidah">Lidah</label>
                            <input type="text" id="input-lidah" class="form-control" placeholder="" name="pasien_lidah">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-bibir">Bibir</label>
                            <input type="text" id="input-bibir" class="form-control" placeholder="" name="pasien_bibir">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Leher</h6>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tonsil">JVP</label>
                            <input type="text" id="input-tonsil" class="form-control" placeholder=""
                                name="pasien_tonsil">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label" for="input-faring">Pembesaran Kelenjar</label>
                            <input type="text" id="input-faring" class="form-control" placeholder=""
                                name="pasien_faring">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label" for="input-lidah">Kaku Kuduk</label>
                            <input type="text" id="input-lidah" class="form-control" placeholder="" name="pasien_lidah">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Torak</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tonsil">Simetris</label>
                            <input type="text" id="input-tonsil" class="form-control" placeholder=""
                                name="pasien_tonsil">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-faring">Asimetris</label>
                            <input type="text" id="input-faring" class="form-control" placeholder=""
                                name="pasien_faring">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Jantung</h6>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tonsil">S1/S2</label>
                            <input type="text" id="input-tonsil" class="form-control" placeholder=""
                                name="pasien_tonsil">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-faring">Murmur</label>
                            <input type="text" id="input-faring" class="form-control" placeholder=""
                                name="pasien_faring">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-lidah">Lain-Lain</label>
                            <input type="text" id="input-lidah" class="form-control" placeholder="" name="pasien_lidah">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Paru-Paru</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-anemia">Suara Napas</label>
                            <input type="text" id="input-anemia" class="form-control" placeholder=""
                                name="pasien_anemia">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-ikterus">Ronki</label>
                            <input type="text" id="input-ikterus" class="form-control" placeholder=""
                                name="pasien_ikterus">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Wheezing</label>
                            <input type="text" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="pasien_reflek_pupil">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-edema">Lain-Lain</label>
                            <input type="text" id="input-edema" class="form-control" placeholder="" name="pasien_edema">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Abdomen</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-anemia">Distensi</label>
                            <input type="text" id="input-anemia" class="form-control" placeholder=""
                                name="pasien_anemia">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-ikterus">Meteorismus</label>
                            <input type="text" id="input-ikterus" class="form-control" placeholder=""
                                name="pasien_ikterus">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Peristaltik</label>
                            <input type="checkbox" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="pasien_reflek_pupil">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-edema">Normal</label>
                            <input type="checkbox" id="input-edema" class="form-control" placeholder=""
                                name="pasien_edema">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-edema">Meningkat</label>
                            <input type="checkbox" id="input-edema" class="form-control" placeholder=""
                                name="pasien_edema">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-edema">Menurun</label>
                            <input type="checkbox" id="input-edema" class="form-control" placeholder=""
                                name="pasien_edema">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-anemia">Ascites</label>
                            <input type="text" id="input-anemia" class="form-control" placeholder=""
                                name="pasien_anemia">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-ikterus">Nyeri Tekan</label>
                            <input type="text" id="input-ikterus" class="form-control" placeholder=""
                                name="pasien_ikterus">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-ikterus">Lokasi</label>
                            <input type="text" id="input-ikterus" class="form-control" placeholder=""
                                name="pasien_ikterus">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-anemia">Hepar</label>
                            <input type="text" id="input-anemia" class="form-control" placeholder=""
                                name="pasien_anemia">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Lien</label>
                            <input type="text" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="pasien_reflek_pupil">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Lain-Lain</label>
                            <input type="text" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="pasien_reflek_pupil">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Extremitas</label>
                            <input type="text" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="pasien_reflek_pupil">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Edema</label>
                            <input type="text" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="pasien_reflek_pupil">
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="heading-small text-muted mb-4">Informasi Pasien</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Rencana Kerja</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Hasil Pemeriksaan Penunjang</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Diagnosis</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Terapi</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Hasil Pembedahan</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Disposisi</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Rekomendasi</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rencana-kerja">Catatan Penting</label>
                            <textarea class="form-control" id="rencana-kerja" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Submit -->
        <div class="card-header text-right">
            <button class="btn btn-primary" type="submit" id="btn-save">Submit</button>
        </div>
        </form>
    </div>
</div>
