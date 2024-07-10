@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">Rekapan Penjualan</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Pendapatan</th>
                        <th scope="col">Tanggal Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($rekapan as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->tempat_tinggal }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <img src="{{ asset('/images/user/' . $data->cover) }}" width="50">
                            </td>
                            {{-- <td>{{ $data->role ? 'Admin' : 'User' }}</td> --}}
                            {{-- <td>
                                <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('user.edit', $data->id) }}"
                                        class="btn btn-outline-warning px-3">EDIT</a>
                                    |
                                    <button class="btn btn-outline-danger px-3"
                                        onclick="return confirm('Apakah anda ingin menghapus?')">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
