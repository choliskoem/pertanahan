@extends('layouts.app')

@section('title', 'Peminjaman')

@push('style')
    <!-- CSS Libraries -->

    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Peminjaman</h1>

                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">Pengajuan : 2</div>
                    <div class="breadcrumb-item">Pengembalian : 2</div>
                </div> --}}
            </div>

            <div class="section-body">
                @if (session('success'))
                    {{-- <div id="toastr-2">
                    {{ session('success') }}
                </div> --}}
                @endif
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
                                    <form action="{{ route('peminjaman.store') }}" method="POST">
                                        @csrf
                                        <div class="row mx-md-n5">
                                            <div class="col px-md-5">

                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="font-weight-bold">Kecamatan</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select name="kecamatan" class="form-control select2"
                                                            id="kecamatan">
                                                            <option value="">Select Kecamatan</option>
                                                            @foreach ($kecamatans as $kecamatan)
                                                                <option value="{{ $kecamatan->id_kecamatan }}">
                                                                    {{ $kecamatan->kecamatan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="col px-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="font-weight-bold">Kelurahan/Desa</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="kelurahan" id="kelurahan"
                                                                class="form-control select2">
                                                                <option value="">Select Kelurahan</option>
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
                                                            <select name="pelayanan" class="form-control select2">
                                                                <option value="Pengecekan">Pengecekan</option>
                                                                <option value="SKPT">SKPT</option>
                                                                <option value="Roya">Roya</option>
                                                                <option value="Peralihan Hak">Peralihan Hak</option>
                                                                <option value="Hak Tanggungan">Hak Tanggungan</option>
                                                                <option value="Perubahan Hak">Perubahan Hak</option>
                                                                <option value="Pemisahan / Pemecahan / Penggabungan">
                                                                    Pemisahan / Pemecahan / Penggabungan</option>
                                                                <option value="Blokir / Sita"> Blokir / Sita</option>
                                                                <option value="Sertifikat Pengganti">Sertifikat Pengganti
                                                                </option>
                                                                <option value="Validasi BPHTB">Validasi BPHTB</option>
                                                                <option value="Ganti Kelurahan / Pindah Kelurahan">Ganti Kelurahan / Pindah Kelurahan</option>
                                                                <option value="Sengketa / Pengaduan">Sengketa / Pengaduan</option>
                                                                <option value="Hapus Hak">Hapus Hak</option>
                                                                <option value="Lain-lain">Lain-lain</option>

                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>



                                            </div>

                                            <div class="col px-md-5">
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="font-weight-bold">Surat Ukur</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select name="surat_ukur" id="surat_ukur"
                                                            class="form-control select2">
                                                            <option value="">Select Surat Ukur</option>
                                                        </select>
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
                                                            <select id="tipe_hak" name="tipe_hak"
                                                                class="form-control select2">
                                                                <option value="hak milik">Hak Milik</option>
                                                                <option value="hak guna usaha">Hak Guna Usaha</option>
                                                                <option value="hak guna bangunan">Hak Guna Bangunan
                                                                </option>
                                                                <option value="hak pakai">Hak Pakai</option>
                                                                <option value="wakaf">Wakaf</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>



                                            </div>

                                            <div class="col px-md-5">
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label class="font-weight-bold">No Hak</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select name="nomor_hak" id="nomor_hak"
                                                            class="form-control select2">
                                                            <option value="">Select No Hak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <input name="rak" type="hidden" id="rak">
                                        <input name="baris" type="hidden" id="baris">
                                        <input name="kolom" type="hidden" id="kolom">
                                        <input name ="bundle" type="hidden" id="bundle">
                                        <div class="row mx-md-n5">

                                            <div class="col px-md-5">

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-3">

                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-check  form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="exampleRadios" id="exampleRadios1"
                                                                    value="BT" checked>
                                                                <label class="form-check-label"
                                                                    for="exampleRadios1">BT</label>
                                                            </div>
                                                            <div class="form-check  form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="exampleRadios" id="exampleRadios2"
                                                                    value="SU">
                                                                <label class="form-check-label"
                                                                    for="exampleRadios2">SU</label>
                                                            </div>

                                                            <div class="form-check  form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="exampleRadios" id="exampleRadios2"
                                                                    value="WARKAH">
                                                                <label class="form-check-label"
                                                                    for="exampleRadios2">WARKAH</label>
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
                                                        <input name="keterangan" type="text" class="form-control"
                                                            required="">
                                                        <div class="invalid-feedback">
                                                            What's your name?
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>


                                        <div class=" text-right">

                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    <br>

                                    {{-- <div class=" text-right" style="display: none;">

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

                                    <div class="table-responsive" style="display: none;">
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
                                    </div> --}}







                                </div>




                                <div class="tab-pane fade" id="tabs-pengajuan" role="tabpanel" aria-labelledby="tabs-2">
                                    <h5>Pengajuan</h5>
                                    <hr>
                                    <div class="float-right">

                                        {{-- <form id="searchForm" method="GET" action="{{ route('peminjaman.index') }}">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="jenis">
                                                <input type="hidden" name="activeTab" value="tabs-pengajuan">
                                                <!-- Hidden input to keep the active tab -->
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i
                                                            class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form> --}}
                                    </div>

                                    <div class="clearfix mb-3"></div>


                                    {{-- <input type="text" id="search" placeholder="Search..."
                                            class="form-control" name="search"> --}}
                                    <br><br>
                                    <table class="table" id="table-pinjam">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Provinsi</th>
                                                <th>Kabupaten</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>No SU</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis</th>
                                                <th>Pelayanan</th>
                                                <th>Rak</th>
                                                <th>Baris</th>
                                                <th>Kolom</th>
                                                <th>Bundle</th>
                                                <th>Keterangan</th>
                                                <th>Waktu</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pinjambukutanahs as $buku)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $buku->provinsi }}</td>
                                                    <td>{{ $buku->kabupaten }}</td>
                                                    <td>{{ $buku->kecamatan }}</td>
                                                    <td>{{ $buku->kelurahan }}</td>
                                                    <td>{{ $buku->no_su }}</td>
                                                    <td>{{ $buku->tipe_hak }}</td>
                                                    <td>{{ $buku->no_hak }}</td>
                                                    <td>{{ $buku->jenis }}</td>
                                                    <td>{{ $buku->pelayanan }}</td>
                                                    <td>{{ $buku->rak }}</td>
                                                    <td>{{ $buku->baris }}</td>
                                                    <td>{{ $buku->kolom }}</td>
                                                    <td>{{ $buku->bundle }}</td>
                                                    <td>{{ $buku->keterangan }}</td>
                                                    <td>{{ $buku->waktu_dipinjam }}</td>
                                                    <td>

                                                        @if ($buku->status == 'Peminjaman')
                                                            <form
                                                                action="{{ route('peminjaman.destroy', $buku->id_pinjam) }}"
                                                                method="POST" class="ml-2">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token"
                                                                    value="{{ csrf_token() }}">
                                                                <button
                                                                    class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                    <i class="fas fa-times"></i>
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        @elseif ($buku->status == 'Arsip Dikirim')
                                                            <button class="btn btn-icon btn-success">Disetujui</button>
                                                        @elseif ($buku->status == 'Dikembalikan')
                                                            <button class="btn btn-icon btn-success">Dikembalikan</button>
                                                        @elseif ($buku->status == 'Selesai')
                                                            <button class="btn btn-icon btn-success">Selesai</button>
                                                        @endif


                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

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

    {{-- <script src="{{ asset('library/jquery/dist/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/izitoast/dist/js/iziToast.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-toastr.js') }}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>


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





    <!-- Page Specific JS File -->
    {{-- <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script> --}}





    <!-- Page Specific JS File -->
@endpush
