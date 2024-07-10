@extends('layouts.backend')
@section('content')
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Daftar Kasir</h5>
                    <form class="row g-3">
                        <div class="col-md-12 mt-3">
                            <label for="input13" class="form-label"><b>Nama Kasir</b></label>
                            <div class="position-relative">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama Kasir"
                                    required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Tempat Tinggal</b></label>
                            <div class="position-relative">
                                <input type="text" name="tempat_tinggal"
                                    class="form-control @error('tempat_tinggal') is-invalid @enderror"
                                    placeholder="Tempat Tinggal" required>
                                @error('tempat_tinggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="position-relative">
                                {{-- <input type="dropdown" name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                                    placeholder="Jenis Kelamin"> --}}
                                <label for="input17" class="form-label"><b>Jenis Kelamin</b></label> <select
                                    type="dropdown" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin" required>
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input17" class="form-label"><b>Email</b></label>
                            <div class="position-relative">
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input17" class="form-label"><b>Password</b></label>
                            <div class="position-relative">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input17" class="form-label"><b>Konfirmasi Password</b></label>
                            <div class="position-relative">
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Konfirmasi Password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input17" class="form-label"><b>Cover</b></label>
                            <div class="position-relative">
                                <input type="file" name="cover"
                                    class="form-control @error('cover') is-invalid @enderror">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="d-md-flex d-grid align-items-center gap-2">
                                <button type="submit" class="btn btn-outline-primary px-4">Save</button>
                                <a href="{{ route('user.index') }}" type="button"
                                    class="btn btn-outline-danger px-4">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection
