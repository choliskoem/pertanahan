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
                    <div class="breadcrumb-item">Pengajuan : 2</div>
                    <div class="breadcrumb-item">Pengembalian : 2</div>
                </div>
            </div>

            <div class="section-body">
                <div class="col-12 ">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-1" data-toggle="pill" href="#tabs-peminjaman"
                                role="tab" aria-controls="tabs-peminjaman" aria-selected="true">Tambah
                                Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="tabs-2" data-toggle="pill" href="#tabs-pengajuan" role="tab"
                                aria-controls="tabs-pengajuan" aria-selected="false">Pengajuan</a>
                        </li>


                    </ul>
                    <div class="card  card-outline card-tabs">

                        <div class="card-body">

                            <div class="tab-content">

                                <div class="tab-pane fade  show active" id="tabs-peminjaman" role="tabpanel"
                                    aria-labelledby="tabs-1">
                                    <h5>Peminjaman</h5>
                                    <hr>
                                    <form action="">
                                        <div class="row mx-md-n5">

                                            <div class="col px-md-5">

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="font-weight-bold">Kecamatan</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select class="form-control select2">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>



                                            </div>

                                            <div class="col px-md-5">

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="font-weight-bold">Kelurahan/Desa</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select class="form-control select2">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>



                                            </div>


                                        </div>
                                        <div class="row mx-md-n5">

                                            <div class="col px-md-5">

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="font-weight-bold">Pelayanan</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select class="form-control select2">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>



                                            </div>

                                            <div class="col px-md-5">

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label font-weight-bold">No
                                                        Berkas</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" required="">
                                                        <div class="invalid-feedback">
                                                            What's your name?
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>

                                        <div class="row mx-md-n5">

                                            <div class="col px-md-5">

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="font-weight-bold">Tipe Hak</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select class="form-control select2">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>



                                            </div>

                                            <div class="col px-md-5">

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label font-weight-bold">No Hak</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" required="">
                                                        <div class="invalid-feedback">
                                                            What's your name?
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>

                                        <div class="row mx-md-n5">

                                            <div class="col px-md-5">

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">

                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox1" value="option1">
                                                                <label class="form-check-label font-weight-bold"
                                                                    for="inlineCheckbox1">BT</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label font-weight-bold"
                                                                    for="inlineCheckbox2">SU</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label font-weight-bold"
                                                                    for="inlineCheckbox2">Warkah</label>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>



                                            </div>

                                            <div class="col px-md-5">

                                                <div class="form-group row">
                                                    <label
                                                        class="col-md-3 col-form-label font-weight-bold">Keterangan</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" required="">
                                                        <div class="invalid-feedback">
                                                            What's your name?
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>


                                        <div class=" text-right">

                                            <button class="btn btn-icon icon-left btn-primary"><i
                                                    class="fa fa-search"></i>Cari</button>
                                        </div>
                                    </form>
                                    <br>

                                    <div class=" text-right">

                                        <label class="custom-switch mt-6 mr-3">
                                            <input type="checkbox" name="custom-switch-checkbox"
                                                class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Urgent</span>
                                        </label>
                                        <button class="btn btn-icon icon-left btn-primary"><i
                                                class="fa fa-arrow-right"></i>Lanjut</button>
                                        <button class="btn btn-icon icon-left btn-danger"><i class="fa fa-trash"></i>Hapus
                                            Semua</button>
                                    </div>

                                    <br>

                                    <div class="table-responsive">
                                        <table class="table-striped table" id="table-2">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        #
                                                    </th>
                                                    <th>Tanggal</th>
                                                    <th>Kecamatan</th>
                                                    <th>Kelurahan</th>
                                                    <th>No Berkas</th>
                                                    <th>Tipe Hak</th>
                                                    <th>No Hak</th>
                                                    <th>Jenis</th>
                                                    <th>Pelayanan</th>
                                                    <th>Keterangan</th>
                                                    <th>Lokasi/Tersedia</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>17-Mei-2024</td>
                                                    <td>Kec.Kota Timur</td>
                                                    <td>Wongkaditi</td>
                                                    <td>11100</td>
                                                    <td>Hak Milik</td>
                                                    <td>08500</td>
                                                    <td>BT</td>
                                                    <td>Permisahan</td>
                                                    <td>untuk proses permisahan pak Debi</td>
                                                    <td>
                                                        <span class="">Tersedia</span>
                                                        <i class="fa fa-check btn-success"></i>
                                                        <button class="btn btn-icon btn-warning"><i
                                                                class="fa fa-trash"></i></button>


                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>







                                </div>




                                <div class="tab-pane fade  " id="tabs-pengajuan" role="tabpanel"
                                    aria-labelledby="tabs-2">

                                    <h5>Pengajuan</h5>
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
                                                            class="fa fa-trash"></i>Batalkan Pengajuan</button>
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
