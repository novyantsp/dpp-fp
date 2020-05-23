@extends('layouts.master')
@section('title', 'Final Project DPP - Pasien')

@section('pageContent')
<!-- Header -->
<div class="header pb-3">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0">Daftar Pasien</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links">
                            <li class="breadcrumb-item"><a class="text-blue" href="{{ url('/') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a class="text-blue"
                                    href="">Daftar Pasien</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="header pb-6">
    <div class="container-fluid">
        {{-- @component('components.card_pasien_list')
        @endcomponent --}}
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
                                        <a href="{{ route('pasien.show',$item->id)}}" class="btn btn-icon btn-info btn-sm"></i>Detail</a>
                                        <a href="{{ route('pasien.edit',$item->id)}}" class="btn btn-icon btn-warning btn-sm"></i>Edit</a>
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
        <!-- Footer -->
        @component('components.footer')
        @endcomponent
    </div>
</div>

@endsection

@push('pagePlugins')
<link rel="stylesheet" href="{{ url('assets/vendor/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('optionalJS')
<script src="{{ url('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ url('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-colorschemes"></script>
<script src="{{ url('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/js/behaviour/list-pasien.js') }}"></script>
@endpush
