@extends('layouts.app')

@section('title', 'Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="section-body">
                @if (session('success'))
                    {{-- <div id="toastr-2">
                        {{ session('success') }}
                    </div> --}}
                @endif
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <form action="{{ route('export.peminjaman') }}" method="GET"
                            class="p-3 shadow-lg rounded bg-light">

                            <div class="form-group mb-3">
                                <label for="bulan" class="font-weight-bold">Pilih Bulan:</label>
                                <select name="bulan" id="bulan" class="form-control custom-select shadow-sm">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                            {{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="tahun" class="font-weight-bold">Pilih Tahun:</label>
                                <select name="tahun" id="tahun" class="form-control custom-select shadow-sm">
                                    @for ($i = date('Y'); $i >= 2000; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <button class="btn btn-primary btn-block shadow-sm" type="submit">
                                <i class="fas fa-print"></i> Print
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <form action="{{ route('export.arsip') }}" method="GET"class="p-3 shadow-lg rounded bg-light">
                            <div class="form-group mb-3">
                                <label for="bulan" class="font-weight-bold">Pilih Bulan:</label>
                                <select name="bulan" id="bulan" class="form-control custom-select shadow-sm">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                            {{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="tahun" class="font-weight-bold">Pilih Tahun:</label>
                                <select name="tahun" id="tahun" class="form-control custom-select shadow-sm">
                                    @for ($i = date('Y'); $i >= 2000; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <button class="btn btn-danger btn-block shadow-sm" type="submit">
                                <i class="fas fa-print"></i> Print
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <form action="{{ route('export.pengembalian') }}" method="GET"
                            class="p-3 shadow-lg rounded bg-light">
                            <div class="form-group mb-3">
                                <label for="bulan" class="font-weight-bold">Pilih Bulan:</label>
                                <select name="bulan" id="bulan" class="form-control custom-select shadow-sm">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                            {{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="tahun" class="font-weight-bold">Pilih Tahun:</label>
                                <select name="tahun" id="tahun" class="form-control custom-select shadow-sm">
                                    @for ($i = date('Y'); $i >= 2000; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <button class="btn btn-warning btn-block shadow-sm" type="submit">
                                <i class="fas fa-print"></i> Print
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <form action="{{ route('export.selesai') }}" method="GET" class="p-3 shadow-lg rounded bg-light">
                            <div class="form-group mb-3">
                                <label for="bulan" class="font-weight-bold">Pilih Bulan:</label>
                                <select name="bulan" id="bulan" class="form-control custom-select shadow-sm">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                            {{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="tahun" class="font-weight-bold">Pilih Tahun:</label>
                                <select name="tahun" id="tahun" class="form-control custom-select shadow-sm">
                                    @for ($i = date('Y'); $i >= 2000; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <button class="btn btn-success btn-block shadow-sm" type="submit">
                                <i class="fas fa-print"></i> Print
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Peminjaman</h4>
                                </div>
                                <div class="card-body">
                                    {{ $total2 }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Arsip Dikirm</h4>
                                </div>
                                <div class="card-body">
                                    {{ $total3 }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pemgembalian</h4>
                                </div>
                                <div class="card-body">
                                    {{ $total4 }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Selesai</h4>
                                </div>
                                <div class="card-body">
                                    {{ $total }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <script src="{{ asset('library/izitoast/dist/js/iziToast.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-toastr.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>

    <script>
        @if (Session::has('success'))
            iziToast.success({
                title: 'Success',
                message: '{{ Session::get('success') }}',
                position: 'topRight'
            });
        @endif

        @if (Session::has('error'))
            iziToast.error({
                title: 'Error',
                message: '{{ Session::get('error') }}',
                position: 'topRight'
            });
        @endif
    </script>
@endpush
