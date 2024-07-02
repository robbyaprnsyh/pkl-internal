@extends('layouts.backend')
@section('content')
    <form action="{{ route('kasir.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Daftar Kasir</h5>
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="input1" class="form-label"><b>Nama Kasir</b></label>
                            <input type="text" class="form-control @error('nama_kasir') is-invalid @enderror"
                                name="nama_kasir" required>
                            @error('nama_kasir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input4" class="form-label"><b>Tempat Tinggal</b></label>
                            <input type="text" class="form-control @error('tempat_tinggal') is-invalid @enderror"
                                name="tempat_tinggal" required>
                            @error('tempat_tinggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input3" class="form-label"><b>Jenis Kelamin</b></label>
                            {{-- <input type="dropdown" class="form-control" name="jenis_kelamin"> --}}
                            <select type="dropdown" class="form-control" name="jenis_kelamin" required>
                                <option></option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input5" class="form-label"><b>Email</b></label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input5" class="form-label"><b>Password</b></label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input5" class="form-label"><b>Konfirmasi Password</b></label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" required>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="d-md-flex d-grid align-items-center gap-2">
                                <button type="submit" class="btn btn-outline-primary px-4">Save</button>
                                <a href="{{ route('kasir.index') }}" type="button"
                                    class="btn btn-outline-danger px-4">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection
