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
                                    id="input_tgl_asesmen" name="tgl_asesmen">
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
                                name="keluhan_utama">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-riwayat-penyakit">Riwayat Penyakit
                                Sekarang</label>
                            <input type="text" id="input-riwayat-penyakit" class="form-control" placeholder=""
                                name="riwayat_penyakit_sekarang">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-riwayat-pengobatan">Riwayat Pengobatan</label>
                            <input type="text" id="input-riwayat-pengobatan" class="form-control" placeholder=""
                                name="riwayat_pengobatan">
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
                                name="anemia">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-ikterus">Ikterus</label>
                            <input type="text" id="input-ikterus" class="form-control" placeholder=""
                                name="ikterus">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-reflek-pupil">Reflek Pupil</label>
                            <input type="text" id="input-reflek-pupil" class="form-control" placeholder=""
                                name="reflek_pupil">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-edema">Edema Palprebae</label>
                            <input type="text" id="input-edema" class="form-control" placeholder="" name="edema_palpebrae">
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
                                name="tonsil">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-faring">Faring</label>
                            <input type="text" id="input-faring" class="form-control" placeholder=""
                                name="faring">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-lidah">Lidah</label>
                            <input type="text" id="input-lidah" class="form-control" placeholder="" name="lidah">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-bibir">Bibir</label>
                            <input type="text" id="input-bibir" class="form-control" placeholder="" name="bibir">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Leher</h6>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label" for="input-jvp">JVP</label>
                            <input type="text" id="input-jvp" class="form-control" placeholder=""
                                name="jvp">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label" for="input-pembesaran-kelenjar">Pembesaran Kelenjar</label>
                            <input type="text" id="input-pembesaran-kelenjar" class="form-control" placeholder=""
                                name="pembesaran_kelenjar">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label" for="input-kaku-kuduk">Kaku Kuduk</label>
                            <input type="text" id="input-kaku-kuduk" class="form-control" placeholder="" name="kaku_kuduk">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Torak</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-simetris">Simetris</label>
                            <input type="text" id="input-simetris" class="form-control" placeholder=""
                                name="simetris">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-asimetris">Asimetris</label>
                            <input type="text" id="input-asimetris" class="form-control" placeholder=""
                                name="asimetris">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Jantung</h6>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-s1_s2">S1/S2</label>
                            <input type="text" id="input-s1_s2" class="form-control" placeholder=""
                                name="s1_s2">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-murmur">Murmur</label>
                            <input type="text" id="input-murmur" class="form-control" placeholder=""
                                name="pmurmur">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-jantung-lain-lain">Lain-Lain</label>
                            <input type="text" id="input-jantung-lain-lain" class="form-control" placeholder="" name="jantung_lain_lain">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Paru-Paru</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-suara-napas">Suara Napas</label>
                            <input type="text" id="input-suara-napas" class="form-control" placeholder=""
                                name="suara_nafas">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-ronki">Ronki</label>
                            <input type="text" id="input-ronki" class="form-control" placeholder=""
                                name="ronki">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-wheezing">Wheezing</label>
                            <input type="text" id="input-wheezing" class="form-control" placeholder=""
                                name="wheezing">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-paru-lain-lain">Lain-Lain</label>
                            <input type="text" id="input-paru-lain-lain" class="form-control" placeholder="" name="paru_lain_lain">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <h6 class="heading-small text-muted mb-4">Abdomen</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-distensi">Distensi</label>
                            <input type="text" id="input-distensi" class="form-control" placeholder=""
                                name="distensi">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-meteorismus">Meteorismus</label>
                            <input type="text" id="input-meteorismus" class="form-control" placeholder=""
                                name="meteorismus">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-peristaltic">Peristaltik</label>
                            <input type="checkbox" id="input-peristaltic" class="form-control" placeholder=""
                                name="peristaltic">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-normal">Normal</label>
                            <input type="checkbox" id="input-normal" class="form-control" placeholder=""
                                name="normal">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-meningkat">Meningkat</label>
                            <input type="checkbox" id="input-meningkat" class="form-control" placeholder=""
                                name="meningkat">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label" for="input-menurun">Menurun</label>
                            <input type="checkbox" id="input-menurun" class="form-control" placeholder=""
                                name="menurun">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-asciles">Ascites</label>
                            <input type="text" id="input-asciles" class="form-control" placeholder=""
                                name="asciles">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-nyeri-tekan">Nyeri Tekan</label>
                            <input type="text" id="input-nyeri-tekan" class="form-control" placeholder=""
                                name="nyeri_tekan">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-lokasi">Lokasi</label>
                            <input type="text" id="input-lokasi" class="form-control" placeholder=""
                                name="lokasi">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-hepar">Hepar</label>
                            <input type="text" id="input-hepar" class="form-control" placeholder=""
                                name="hepar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-lien">Lien</label>
                            <input type="text" id="input-lien" class="form-control" placeholder=""
                                name="lien">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-lain-lain">Lain-Lain</label>
                            <input type="text" id="input-lain-lain" class="form-control" placeholder=""
                                name="lain_lain">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-suhu">Extremitas</label>
                            <input type="text" id="input-suhu" class="form-control" placeholder=""
                                name="suhu">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-edema">Edema</label>
                            <input type="text" id="input-edema" class="form-control" placeholder=""
                                name="edema">
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
                            <label for="hasil-pemeriksaan-penunjang">Hasil Pemeriksaan Penunjang</label>
                            <textarea class="form-control" id="hasil-pemeriksaan-penunjang" rows="3" name="hasil_pemeriksaan_penunjang"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="diagnosis">Diagnosis</label>
                            <textarea class="form-control" id="diagnosis" rows="3" name="diagnosis"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="terapi">Terapi</label>
                            <textarea class="form-control" id="terapi" rows="3" name="terapi"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="hasil-pembedahan">Hasil Pembedahan</label>
                            <textarea class="form-control" id="hasil-pembedahan" rows="3" name="hasil_pembedahan"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="disposisi">Disposisi</label>
                            <textarea class="form-control" id="disposisi" rows="3" name="disposisi"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="rekomendasi">Rekomendasi</label>
                            <textarea class="form-control" id="rekomendasi" rows="3" name="saran"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="catatan-penting">Catatan Penting</label>
                            <textarea class="form-control" id="catatan-penting" rows="3" name="catatan"></textarea>
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
