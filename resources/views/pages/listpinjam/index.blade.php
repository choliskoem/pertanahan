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
                <h1>List Peminjaman</h1>

                <div class="section-header-breadcrumb">
                    {{-- <div class="breadcrumb-item">Pengajuan : 2</div>
                    <div class="breadcrumb-item">Pengembalian : 2</div> --}}
                </div>
            </div>

            <div class="section-body">
                <div class="col-12 ">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-1" data-toggle="pill" href="#tabs-pengajuan"
                                role="tab" aria-controls="tabs-pengajuan" aria-selected="true">Pengajuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="tabs-2" data-toggle="pill" href="#tabs-dikirim" role="tab"
                                aria-controls="tabs-dikirim" aria-selected="false">Dikirim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="tabs-3" data-toggle="pill" href="#tabs-peminjaman" role="tab"
                                aria-controls="tabs-peminjaman" aria-selected="false">Peminjaman</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " id="tabs-4" data-toggle="pill" href="#tabs-forward" role="tab"
                                aria-controls="tabs-forward" aria-selected="false">Forward</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " id="tabs-5" data-toggle="pill" href="#tabs-pengembalian" role="tab"
                                aria-controls="tabs-pengembalian" aria-selected="false">Pengembalian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="tabs-6" data-toggle="pill" href="#tabs-selesai" role="tab"
                                aria-controls="tabs-selesai" aria-selected="false">Selesai</a>
                        </li>



                    </ul>
                    <div class="card  card-outline card-tabs">

                        <div class="card-body">

                            <div class="tab-content">

                                <div class="tab-pane fade  show active" id="tabs-pengajuan" role="tabpanel" aria-labelledby="tabs-1">
                                    <h5>List Pengajuan</h5>
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
                                            <tr style="background-color: gray; color: white ">
                                                <th>No Berkas</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Pelayanan</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis Arsip</th>

                                                <th>Keterangan</th>

                                            </tr>
                                            <tr style="background-color: rgb(154, 154, 255); color:white">
                                                <td colspan="2">
                                                    Admin(Admin)
                                                </td>
                                                <td colspan="2">
                                                    16-Mei-2024 04.04
                                                </td>
                                                <td>0 Hari</td>
                                                <td> <label class="custom-switch mt-6 ">
                                                        <input type="checkbox" name="custom-switch-checkbox"
                                                            class="custom-switch-input">
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description">Urgent</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    No Tiket: 19331315451

                                                </td>

                                                <td>
                                                    <button class="btn btn-icon btn-secondary"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-icon btn-secondary"><i
                                                            class="fa fa-print"></i>Print</button>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>11100</td>
                                                <td>Kota Timur</td>
                                                <td>Wongkaditi</td>
                                                <td>Permisahan</td>
                                                <td>Hak Milik</td>
                                                <td>08500</td>
                                                <td>BT</td>

                                                <td>untuk proses permisahan pak Debi</td>

                                            </tr>



                                        </table>
                                    </div>







                                </div>




                                <div class="tab-pane fade  " id="tabs-dikirim" role="tabpanel" aria-labelledby="tabs-2">

                                    <h5>Dikirim</h5>
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

                                                <th>No Berkas</th>
                                                <th>Seksi</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Pelayanan</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis Arsip</th>
                                                <th>Keterangan</th>
                                                <th>Waktu</th>
                                                <th> Status</th>
                                                <th>History</th>
                                                <th>User</th>
                                            </tr>


                                            <tr>

                                                <td>11100</td>
                                                <td>Admin</td>
                                                <td>Kota Timur</td>
                                                <td>Wongkaditi</td>
                                                <td>Permisahan</td>
                                                <td>Hak Milik</td>
                                                <td>08500</td>
                                                <td>BT</td>
                                                <td>untuk proses permisahan pak Debi</td>
                                                <td>17-Mei-2024 04.40</td>
                                                <td>Arsip Dikirim</td>
                                                <td>

                                                    <button class="btn btn-icon btn-primary"><i
                                                            class="fa fa-search"></i></button>
                                                </td>
                                                <td>Admin</td>
                                            </tr>



                                        </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade  " id="tabs-peminjaman" role="tabpanel" aria-labelledby="tabs-3">

                                    <h5>Dikirim</h5>
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

                                                <th>No Berkas</th>
                                                <th>Seksi</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Pelayanan</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis Arsip</th>
                                                <th>Keterangan</th>
                                                <th>Waktu</th>
                                                <th> Status</th>
                                                <th>History</th>
                                                <th>User</th>
                                            </tr>


                                            <tr>

                                                <td>11100</td>
                                                <td>Admin</td>
                                                <td>Kota Timur</td>
                                                <td>Wongkaditi</td>
                                                <td>Permisahan</td>
                                                <td>Hak Milik</td>
                                                <td>08500</td>
                                                <td>BT</td>
                                                <td>untuk proses permisahan pak Debi</td>
                                                <td>17-Mei-2024 04.40</td>
                                                <td>Peminjaman</td>
                                                <td>

                                                    <button class="btn btn-icon btn-primary"><i
                                                            class="fa fa-search"></i></button>
                                                </td>
                                                <td>Admin</td>
                                            </tr>



                                        </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade  " id="tabs-pengembalian" role="tabpanel" aria-labelledby="tabs-5">

                                    <h5>Pengembalian</h5>
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

                                                <th>No Berkas</th>
                                                <th>Seksi</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Pelayanan</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis Arsip</th>
                                                <th>Keterangan</th>
                                                <th>Waktu</th>
                                                <th> Status</th>
                                                <th>History</th>
                                                <th>User</th>
                                            </tr>


                                            <tr>

                                                <td>11100</td>
                                                <td>Admin</td>
                                                <td>Kota Timur</td>
                                                <td>Wongkaditi</td>
                                                <td>Permisahan</td>
                                                <td>Hak Milik</td>
                                                <td>08500</td>
                                                <td>BT</td>
                                                <td>untuk proses permisahan pak Debi</td>
                                                <td>17-Mei-2024 04.40</td>
                                                <td>  <button class="btn btn-icon btn-primary"><i
                                                    class="fa fa-check"></i>Pengembalian</button></td>
                                                <td>

                                                    <button class="btn btn-icon btn-primary"><i
                                                            class="fa fa-search"></i></button>
                                                </td>
                                                <td>Admin</td>
                                            </tr>



                                        </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade  " id="tabs-selesai" role="tabpanel" aria-labelledby="tabs-6">

                                    <h5>Selesai</h5>
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

                                                <th>No Berkas</th>
                                                <th>Seksi</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Pelayanan</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis Arsip</th>
                                                <th>Keterangan</th>
                                                <th>History</th>
                                                <th>Waktu Peminjaman</th>
                                                <th>Waktu Selesai</th>
                                                <th>Rusak/Hilang</th>
                                            </tr>


                                            <tr>

                                                <td>11100</td>
                                                <td>Admin</td>
                                                <td>Kota Timur</td>
                                                <td>Wongkaditi</td>
                                                <td>Permisahan</td>
                                                <td>Hak Milik</td>
                                                <td>08500</td>
                                                <td>BT</td>
                                                <td>untuk proses permisahan pak Debi</td>
                                                <td>

                                                    <button class="btn btn-icon btn-primary"><i
                                                            class="fa fa-search"></i></button>
                                                </td>
                                                <td>17-Mei-2024 04.40</td>
                                                <td>19-Mei-2024 04.40</td>


                                                <td></td>
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
