@extends('layouts.auth')

@section('title', 'Login')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Login</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ url('/proses_login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="username">username</label>
                    <input id="username" type="text"
                        class="form-control @error('username')
                    is-invalid
                    @enderror"
                        name="username" tabindex="1" autofocus>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password"
                        class="form-control @error('password')
                    is-invalid

                    @enderror"
                        name="password" tabindex="2">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
                {{-- <div class="mt-5 text-center">
                    Don't have an account? <a href="{{ route('register') }}">Create One</a>
                </div> --}}
            </form>



        </div>
    </div>

@endsection


@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush