@extends('layouts.backend')
@section('content')
    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Produk {{ $produk->nama_produk }}</h5>
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="input13" class="form-label"><b>Nama Produk</b></label>
                            <div class="position-relative">
                                <input type="text" name="nama_produk"
                                    class="form-control @error('nama_produk') is-invalid @enderror"
                                    value="{{ $produk->nama_produk }}" placeholder="Nama Produk" required>
                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Harga</b></label>
                            <div class="position-relative">
                                <input type="text" name="harga"
                                    class="form-control @error('harga') is-invalid @enderror" value="{{ $produk->harga }}"
                                    placeholder="Harga" required>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Kategori</b></label>
                            <div class="position-relative">
                                <select class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori">
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $produk->id_kategori ? 'selected' : '' }}>
                                            {{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('id_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Stok</b></label>
                            <div class="position-relative">
                                <input type="text" name="stok"
                                    class="form-control @error('stok') is-invalid @enderror" value="{{ $produk->stok }}"
                                    placeholder="Stok" required>
                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="input16" class="form-label"><b>Cover</b></label>
                            <div class="position-relative">
                                <img name="cover" src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
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
