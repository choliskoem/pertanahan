@extends('layouts.app')

@section('title', 'Blank Page')

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
                <h1>Peminjaman</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">selesai : 2</div>
                    <div class="breadcrumb-item">Pengembalian : 2</div>
                </div>
            </div>

            <div class="section-body">
                <div class="col-12 ">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-1" data-toggle="pill" href="#tabs-peminjaman"
                                role="tab" aria-controls="tabs-peminjaman" aria-selected="true">
                                Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="tabs-2" data-toggle="pill" href="#tabs-selesai" role="tab"
                                aria-controls="tabs-selesai" aria-selected="false">Selesai</a>
                        </li>


                    </ul>
                    <div class="card  card-outline card-tabs">

                        <div class="card-body">

                            <div class="tab-content">

                                <div class="tab-pane fade  show active" id="tabs-peminjaman" role="tabpanel"
                                    aria-labelledby="tabs-1">
                                    <h5>Peminjaman</h5>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table-striped table">
                                            <tr>

                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>No Berkas</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis</th>
                                                 <th>Pelayanan</th>
                                                <th>Keterangan</th>
                                                <th>Waktu</th>
                                                <th> Status</th>
                                                <th>History</th>
                                                <th>User</th>
                                            </tr>


                                            <tr>

                                                <td>Kota Timur</td>
                                                <td>Wongkaditi</td>
                                                <td>11100</td>
                                                <td>Hak Milik</td>
                                                <td>08500</td>
                                                <td>BT</td>
                                                <td>Permisahan</td>
                                                <td>untuk proses permisahan pak Debi</td>
                                                <td>17-Mei-2024 04.40</td>
                                                <td> <button class="btn btn-icon btn-success"><i
                                                    class="fa fa-check"></i>Peminjaman</button></td>
                                                <td>

                                                    <button class="btn btn-icon btn-primary"><i
                                                            class="fa fa-search"></i></button>
                                                </td>
                                                <td>Admin</td>
                                            </tr>



                                        </table>
                                    </div>






                                </div>




                                <div class="tab-pane fade  " id="tabs-selesai" role="tabpanel" aria-labelledby="tabs-2">

                                    <h5>selesai</h5>
                                    <hr>
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
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>No Berkas</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis</th>
                                                <th>Pelayanan</th>
                                                <th>Keterangan</th>
                                                <th>Waktu</th>
                                                <th> Status</th>
                                                <th>User</th>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>Kota Timur</td>
                                                <td>Wongkaditi</td>
                                                <td>11100</td>
                                                <td>Hak Milik</td>
                                                <td>08500</td>
                                                <td>BT</td>
                                                <td>Permisahan</td>
                                                <td>untuk proses permisahan pak Debi</td>
                                                <td>17-Mei-2024 04.40</td>
                                                <td>

                                                    <button class="btn btn-icon btn-danger"><i
                                                            class="fa fa-trash"></i>Batalkan selesai</button>
                                                </td>
                                                <td>ADMIN</td>
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
