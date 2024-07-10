@extends('layouts.backend')
@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Kasir {{ $user->name }}</h5>
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="input13" class="form-label"><b>Nama Kasir</b></label>
                            <div class="position-relative">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}"
                                    placeholder="Nama Kasir" required>
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
                                    value="{{ $user->tempat_tinggal }}" placeholder="Tempat Tinggal" required>
                                @error('tempat_tinggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Jenis Kelamin</b></label>
                            <div class="position-relative">
                                {{-- <input type="text" name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    value="{{ $user->jenis_kelamin }}" placeholder="Jenis Kelamin" required> --}}
                                <select type="dropdown" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin" value="{{ $user->jenis_kelamin }}" >
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
                            <label for="input16" class="form-label"><b>Email</b></label>
                            <div class="position-relative">
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}"
                                    placeholder="Email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Password</b></label>
                            <div class="position-relative">
                                <input type="text" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ $user->password }}" placeholder="Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Konfirmasi Password</b></label>
                            <div class="position-relative">
                                <input type="text" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    value="{{ $user->password }}" placeholder="Konfirmasi Password" required>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Cover</b></label>
                            <div class="position-relative">
                                <img name="cover" src="{{ asset('/images/user/' . $user->cover) }}" width="100">
                                <input type="file" name="cover"
                                    class="form-control mt-2 @error('cover') is-invalid @enderror" placeholder="Cover"
                                    required>
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <label for="input17" class="form-label">Password</label>
                            <div class="position-relative">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">lock_open</i></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="input17" class="form-label">Confirm Password</label>
                            <div class="position-relative">
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" placeholder="Confirm Password">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">lock_open</i></span>
                            </div>
                        </div> --}}

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
