@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">Table Kategori</h6>
    <hr>
    @if (session('success'))
        <div class="alert alert-success fade show mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="col-lg-3">
                <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary px-4 raised d-flex gap-2">
                    <i class="material-icons-outlined">cloud_upload</i>Add Kategori</a>
            </div>
            <table class="table mb-0 mt-3 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->nama_kategori }}</td>
                            <td>
                                <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('kategori.edit', $data->id) }}"
                                        class="btn btn-outline-warning px-3">EDIT</a>
                                    |
                                    <button class="btn btn-outline-danger px-3"
                                        onclick="return confirm('Apakah anda ingin menghapus?')">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
