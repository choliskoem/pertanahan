@extends('layouts.app')

@section('title', 'Seksi & Pelayanan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Seksi & Pelayanan</h1>

                <div class="section-header-breadcrumb">

                </div>
            </div>

            <div class="section-body">
                <div class="col-12 ">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Seksi</h4>
                                    <div class="float-right">
                                        <button class="btn btn-icon btn-primary"><i class="fa fa-plus"></i>Tambah Seksi</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="float-right">
                                        <form method="GET" action="">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="name">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix mb-3"></div>
                                    <div class="table-responsive">
                                        <table class="table-striped table">
                                            <tr>
                                                <th>#</th>
                                                <th>Seksi</th>
                                                <th>Aksi</th>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>Php</td>
                                                <td> <button class="btn btn-icon btn-primary"><i
                                                            class="fa fa-pencil"></i>Edit</button></td>

                                            </tr>



                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Pelayanan</h4>
                                    <div class="float-right">
                                        <button class="btn btn-icon btn-primary"><i class="fa fa-plus"></i>Tambah Pelayanan</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="float-right">
                                        <form method="GET" action="">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="name">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix mb-3"></div>
                                    <div class="table-responsive">
                                        <table class="table-striped table">
                                            <tr>
                                                <th>#</th>
                                                <th>Seksi</th>
                                                <th>Pelayanan</th>
                                                <th>Aksi</th>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>PHP</td>
                                                <td>Pengecekan</td>
                                                <td> <button class="btn btn-icon btn-primary"><i
                                                            class="fa fa-pencil"></i>Edit</button></td>

                                            </tr>



                                        </table>
                                    </div>
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
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
    <!-- Page Specific JS File -->
@endpush
