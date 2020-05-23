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
        @component('components.card.card_pasien_list')
        @endcomponent
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
