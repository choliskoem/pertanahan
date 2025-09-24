@extends('layouts.app')

@section('title', 'Pengembalian')

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
                <h1>Pengembalian</h1>

                <div class="section-header-breadcrumb">
                    {{-- <div class="breadcrumb-item">selesai : 2</div>
                    <div class="breadcrumb-item">Pengembalian : 2</div> --}}
                </div>
            </div>

            <div class="section-body">
                <div class="col-12 ">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-1" data-toggle="pill" href="#tabs-peminjaman"
                                role="tab" aria-controls="tabs-peminjaman" aria-selected="true">
                                Pengembalian</a>
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
                                    <h5>Pengembalian</h5>
                                    <hr>
                                    <table class="table " id="table-pengembalian">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No Berkas</th>
                                                <th>Provinsi</th>
                                                <TH>Kabupaten</TH>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Pelayanan</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis Arsip</th>
                                                <th>Rak</th>
                                                <th>Baris</th>
                                                <th>Kolom</th>
                                                <th>Bundle</th>
                                                <th>Status</th>
                                                <th>Keterangan</th>
                                                <th>Waktu Dipinjam</th>
                                                <th>Waktu Disetujui</th>
                                                <th>Ubah Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pinjambukutanahs as $buku)
                                                @if ($buku->status == 'Arsip Dikirim')
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $buku->no_su }}</td>
                                                        <td>{{ $buku->provinsi }}</td>
                                                        <td>{{ $buku->kabupaten }}</td>
                                                        <td>{{ $buku->kecamatan }}</td>
                                                        <td>{{ $buku->kelurahan }}</td>
                                                        <td>{{ $buku->pelayanan }}</td>
                                                        <td>{{ $buku->tipe_hak }}</td>
                                                        <td>{{ $buku->no_hak }}</td>
                                                        <td>{{ $buku->jenis }}</td>

                                                        <td>{{ $buku->rak }}</td>
                                                        <td>{{ $buku->baris }}</td>
                                                        <td>{{ $buku->kolom }}</td>
                                                        <td>{{ $buku->bundle }}</td>
                                                        <td>{{ $buku->status }}</td>
                                                        <td>{{ $buku->keterangan }}</td>
                                                        <td>{{ $buku->waktu_dipinjam }}</td>
                                                        <td>{{ $buku->waktu_disetujui }}</td>
                                                        <td>
                                                           @if ($buku->status == 'Arsip Dikirim')
    <form action="{{ route('pengembalian.update', $buku->id_pinjam) }}"
          method="POST" class="ml-2 user-form">
        @method('PUT')
        @csrf
        <button type="button" class="btn btn-primary confirmation">Ubah</button>
    </form>
@endif




                                                        </td>
                                                        {{-- <td> --}}
                                                        {{-- <button class="btn btn-primary" id="modal-2">Ubah Status</button> --}}
                                                        {{-- <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#ubahStatusModal"
                                                                data-id="{{ $buku->id_pinjam }}">
                                                                Ubah Status
                                                            </button> --}}
                                                        {{-- </td> --}}

                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>







                                </div>




                                <div class="tab-pane fade  " id="tabs-selesai" role="tabpanel" aria-labelledby="tabs-2">

                                    <h5>selesai</h5>
                                    <hr>
                                    {{-- <div class="float-right">
                                        <form method="GET" action="">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="name">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> --}}

                                    <div class="clearfix mb-3"></div>

                                    <table class="table " id="table-selesai">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No Berkas</th>
                                                <th>Provinsi</th>
                                                <TH>Kabupaten</TH>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Pelayanan</th>
                                                <th>Tipe Hak</th>
                                                <th>No Hak</th>
                                                <th>Jenis Arsip</th>
                                                <th>Rak</th>
                                                <th>Baris</th>
                                                <th>Kolom</th>
                                                <th>Bundle</th>
                                                <th>Keterangan</th>
                                                <th>Waktu Pengajuan</th>
                                                <th>Waktu Disetujui</th>
                                                <th> Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pinjambukutanahs as $buku)
                                                @if ($buku->status == 'Selesai')
                                                    <tr>

                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $buku->no_su }}</td>
                                                        <td>{{ $buku->provinsi }}</td>
                                                        <td>{{ $buku->kabupaten }}</td>
                                                        <td>{{ $buku->kecamatan }}</td>
                                                        <td>{{ $buku->kelurahan }}</td>
                                                        <td>{{ $buku->pelayanan }}</td>
                                                        <td>{{ $buku->tipe_hak }}</td>
                                                        <td>{{ $buku->no_hak }}</td>
                                                        <td>{{ $buku->jenis }}</td>
                                                        <td>{{ $buku->rak }}</td>
                                                        <td>{{ $buku->baris }}</td>
                                                        <td>{{ $buku->kolom }}</td>
                                                        <td>{{ $buku->bundle }}</td>
                                                        <td>{{ $buku->keterangan }}</td>
                                                        <td>{{ $buku->waktu_dipinjam }}</td>
                                                        <td>{{ $buku->waktu_disetujui }}</td>
                                                        <td>
                                                            @if ($buku->status == 'Selesai')
                                                                <button class="btn btn-success">Selesai</button>
                                                                {{-- <form id="user-form"
                                                                    action="{{ route('listpinjam.update', $buku->id_pinjam) }}"
                                                                    method="POST" class="ml-2">
                                                                    <input type="hidden" name="_method" value="PUT">
                                                                    <input type="hidden" name="_token"
                                                                        value="{{ csrf_token() }}">
                                                                    <button type="button" class="btn btn-primary"
                                                                        id="confirmation">Ubah</button>

                                                                </form> --}}
                                                            @endif




                                                        </td>
                                                        {{-- <td> --}}
                                                        {{-- <button class="btn btn-primary" id="modal-2">Ubah Status</button> --}}
                                                        {{-- <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#ubahStatusModal"
                                                                data-id="{{ $buku->id_pinjam }}">
                                                                Ubah Status
                                                            </button> --}}
                                                        {{-- </td> --}}

                                                    </tr>
                                                @endif
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
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>
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

<script>
document.querySelectorAll('.confirmation').forEach(function(button) {
    button.addEventListener('click', function() {
        let form = this.closest('.user-form'); // ambil form pada baris yg sama
        swal({
            title: 'Are you sure?',
            text: 'Apakah anda menyetujui dokumen ini?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((willSubmit) => {
            if (willSubmit) {
                form.submit();
            }
        });
    });
});
</script>

    <!-- Page Specific JS File -->
@endpush
