{{-- <script>
    var pasiens = <?php echo json_encode($pasiens) ?>;
    // var pasiens_data = JSON.parse(pasiens);
</script> --}}
<div class="card">
    <div class="card-body">
        {{-- <!--@if(session('deletePasienFailed'))
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
        @endif--> --}}
        <div class="card-body">
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="no">No</th>
                            <th scope="col" class="sort" data-sort="nama">Nama Pasien</th>
                            <th scope="col" class="sort" data-sort="usia">Usia</th>
                            <th scope="col" class="sort" data-sort="nomor-rm">No.RM</th>
                            <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                            <th scope="col" class="sort" data-sort="aksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($formAll as $item)
                         <tr>
                            <td>1</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->usia}}</td>
                            <td>{{$item->no_rm}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>
                                <a href="" class="btn btn-icon btn-info btn-sm"></i>Detail</a>
                                <a href="" class="btn btn-icon btn-warning btn-sm"></i>Edit</a>
                                <button type="button" class="btn btn-icon btn-danger btn-sm hapus-pasien" data-toggle="modal"
                                    data-target="#hapus" id="hapus-pasien"></i>Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
