@extends('layouts.backend')
@section('content')
    <form action="{{ route('kasir.update', $kasir->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Kasir {{ $kasir->nama_kasir }}</h5>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="input1" class="form-label"><b>Nama Kasir</b></label>
                            <input type="text" class="form-control @error('nama_kasir') is-invalid @enderror"
                                name="nama_kasir" value="{{ $kasir->nama_kasir }}" required>
                            @error('nama_kasir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="input4" class="form-label"><b>Tempat Tinggal</b></label>
                            <input type="text" class="form-control @error('tempat_tinggal') is-invalid @enderror"
                                name="tempat_tinggal" value="{{ $kasir->tempat_tinggal }}" required>
                            @error('tempat_tinggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="input4" class="form-label"><b>Jenis Kelamin</b></label>
                            <select type="dropdown" class="form-control" name="jenis_kelamin" required>
                                <option value="" disabled selected></option>
                                <option value="Laki-laki" {{ old('jenis_kelamin', $kasir->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $kasir->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="input5" class="form-label"><b>Email</label>
                            </b><input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ $kasir->email }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="input5" class="form-label"><b>Password</b></label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="input5" class="form-label"><b>Konfirmasi Password</b></label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-2">
                                <button type="submit" class="btn btn-outline-primary px-4">Save</button>
                                <a href="{{ route('kasir.index') }}" type="button" class="btn btn-outline-danger px-4">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
