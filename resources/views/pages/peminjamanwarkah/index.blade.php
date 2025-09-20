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
                                aria-controls="tabs-pengajuan" aria-selected="false">Pengembalian</a>
                        </li>


                    </ul>
                    <div class="card  card-outline card-tabs">

                        <div class="card-body">

                            <div class="tab-content">

                           <div class="tab-pane fade show active" id="tabs-peminjaman" role="tabpanel" aria-labelledby="tabs-1">
    <h5>Peminjaman Warkah</h5>
    <hr>
    <form action="{{ route('peminjamanwarkah.store') }}" method="POST">
        @csrf
        <div class="row mx-md-n5">
            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Nomor Warkah</label>
                    <div class="col-md-9">
                        <input type="text" name="nomor_warkah" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Tahun</label>
                    <div class="col-md-9">
                        <input type="number" name="tahun" class="form-control" min="1900" max="{{ date('Y') }}" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-md-n5">
            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Kecamatan</label>
                    <div class="col-md-9">
                        <select name="kecamatan" id="kecamatan" class="form-control select2" required>
                            <option value="">Pilih Kecamatan</option>
                            @foreach ($kecamatans as $kecamatan)
                                <option value="{{ $kecamatan->id_kecamatan }}">{{ $kecamatan->kecamatan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Kelurahan</label>
                    <div class="col-md-9">
                        <select name="kelurahan" id="kelurahan" class="form-control select2" required>
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-md-n5">
            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Jenis Hak</label>
                    <div class="col-md-9">
                        <select name="jenis_hak" id="jenis_hak" class="form-control select2" required>
                            <option value="">Pilih Jenis Hak</option>
                            <option value="Hak Milik">Hak Milik</option>
                            <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                            <option value="Hak Guna Bangunan">Hak Guna Bangunan</option>
                            <option value="Hak Pakai">Hak Pakai</option>
                            <option value="Wakaf">Wakaf</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Nomor Hak</label>
                    <div class="col-md-9">
                        <input type="text" name="nomor_hak" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-md-n5">
            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Jenis Peminjaman</label>
                    <div class="col-md-9">
                        <select name="jenis_peminjaman" id="jenis_peminjaman" class="form-control select2" required>
                            <option value="">Pilih Jenis Peminjaman</option>
                            <option value="BT">BT</option>
                            <option value="SU">SU</option>
                            <option value="WARKAH">WARKAH</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Nama Peminjam</label>
                    <div class="col-md-9">
                        <input type="text" name="nama_peminjam" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-md-n5">
            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Keperluan</label>
                    <div class="col-md-9">
                        <textarea name="keperluan" class="form-control" rows="2" required></textarea>
                    </div>
                </div>
            </div>

            <div class="col px-md-5">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label font-weight-bold">Jangka Waktu</label>
                    <div class="col-md-9">
                        <input type="number" name="jangka_waktu" class="form-control" placeholder="Hari" min="1" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>



                                <div class="tab-pane fade" id="tabs-pengajuan" role="tabpanel" aria-labelledby="tabs-2">
                                    <h5>Pengembalian</h5>
                                    <hr>
                                    <div class="float-right">

                                      
                                    </div>

                                    <div class="clearfix mb-3"></div>


                                   
                                    <br><br>
                                   <table class="table" id="table-pinjam">
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor Warkah</th>
            <th>Tahun</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>Jenis Hak</th>
            <th>Nomor Hak</th>
            <th>Jenis Peminjaman</th>
            <th>Nama Peminjam</th>
            <th>Keperluan</th>
            <th>Jangka Waktu</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peminjamanWarkah as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nomor_warkah }}</td>
                <td>{{ $item->tahun }}</td>
                 <td>{{ $item->kecamatan }}</td>
                                                    <td>{{ $item->kelurahan }}</td>
                <td>{{ $item->jenis_hak }}</td>
                <td>{{ $item->nomor_hak }}</td>
                <td>{{ $item->jenis_peminjaman }}</td>
                <td>{{ $item->nama_peminjam }}</td>
                <td>{{ $item->keperluan }}</td>
                <td>{{ $item->jangka_waktu }} hari</td>
                <td>{{ $item->tanggal_pinjam }}</td>
                <td>{{ $item->tanggal_kembali ?? '-' }}</td>
                <td>
                    @if ($item->status == 'dipinjam')
                        <span class="badge badge-warning">Dipinjam</span>
                    @elseif ($item->status == 'dikembalikan')
                        <span class="badge badge-success">Dikembalikan</span>
                    @endif
                </td>
              <td>
    @if ($item->status == 'dipinjam')
        {{-- Tombol kembalikan --}}
        <form action="{{ route('peminjamanwarkah.kembalikan', $item->id) }}" method="POST" class="d-inline">
            @csrf
            @method('PUT')
            <button class="btn btn-sm btn-success">
                <i class="fas fa-undo"></i> Kembalikan
            </button>
        </form>

        {{-- Tombol hapus --}}
        <form action="{{ route('peminjamanwarkah.destroy', $item->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger confirm-delete">
                <i class="fas fa-times"></i> Hapus
            </button>
        </form>
    @elseif ($item->status == 'dikembalikan')
        <button class="btn btn-sm btn-secondary" disabled>✔ Dikembalikan</button>
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
