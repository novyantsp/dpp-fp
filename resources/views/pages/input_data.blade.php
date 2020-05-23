@extends('layouts.master')
@section('title', 'Final Project DPP - Input Data')

@section('pageContent')
<!-- Header -->
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0">Input Data</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links">
                            <li class="breadcrumb-item"><a class="text-blue" href="{{ url('/') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a class="text-blue" href="">Input
                                    Data</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="tab-content">
        <div class="row">
            <div class="col-12">
                @component('components.card.card_input_data')
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
</div>
@endsection

@push('pagePlugins')
<link rel="stylesheet" href="{{ url('assets/vendor/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('optionalJS')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5Jrp9PtHe0WapppUzxbIpMDWMAcV3qE4"></script>
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
<script src="{{ url('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ url('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-colorschemes"></script>
<script src="{{ url('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ url('assets/js/behaviour/input.js') }}"></script>

@endpush
