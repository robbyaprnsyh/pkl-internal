@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">Table Kasir</h6>
    <hr>
    @if (session('success'))
        <div class="alert alert-success fade show mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="col-lg-3">
                <a href="{{ route('kasir.create') }}" class="btn btn-outline-primary px-4 raised d-flex gap-2">
                    <i class="material-icons-outlined">cloud_upload</i>Daftar Kasir</a>
            </div>
            <table class="table mb-0 mt-3 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kasir</th>
                        <th scope="col">Tempat Tinggal</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kasir as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->nama_kasir}}</td>
                            <td>{{ $data->tempat_tinggal }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <form action="{{ route('kasir.destroy', $data->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('kasir.edit', $data->id) }}"
                                        class="btn btn-outline-warning px-5">EDIT</a>
                                    |
                                    <button class="btn btn-outline-danger px-5"
                                        onclick="return confirm('Apakah anda ingin menghapus?')">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
