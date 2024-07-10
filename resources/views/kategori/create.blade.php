@extends('layouts.backend')
@section('content')
    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Add Kategori</h5>
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="input1" class="form-label"><b>Nama Kategori</b></label>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" placeholder="Nama Kategori">
                            @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="d-md-flex d-grid align-items-center gap-2">
                                <button type="submit" class="btn btn-outline-primary px-4">Save</button>
                                <a href="{{ route('kategori.index') }}" type="button"
                                    class="btn btn-outline-danger px-4">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection
