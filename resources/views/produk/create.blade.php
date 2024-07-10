@extends('layouts.backend')
@section('content')
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Add Produk</h5>
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="input1" class="form-label"><b>Nama Produk</b></label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" placeholder="Nama Produk">
                            @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input3" class="form-label"><b>Harga</b></label>
                            <input type="text" class="form-control" name="harga" placeholder="Harga">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input4" class="form-label"><b>Kategori</b></label>
                            <select class="form-control" name="id_kategori">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input5" class="form-label"><b>Stok</b></label>
                            <input type="text" class="form-control" name="stok" placeholder="Stok">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input6" class="form-label"><b>Cover</b></label>
                            <input type="file" class="form-control" name="cover">
                        </div>

                        <div class="col-md-12">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="d-md-flex d-grid align-items-center gap-2">
                                <button type="submit" class="btn btn-outline-primary px-4">Save</button>
                                <a href="{{ route('produk.index') }}" type="button"
                                    class="btn btn-outline-danger px-4">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection
