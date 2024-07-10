@extends('layouts.backend')
@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        @foreach ($user as $data)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        {{-- <img src="https://placehold.co/800x500/png" class="w-100 mb-4 rounded" alt="..."> --}}
                        <center>
                            <img src="{{ asset('/images/user/' . $data->cover) }}" class="w-10 mb-4 rounded" width="50%">
                        </center>
                        <tr>
                            <td>
                                <h5 align="center">{{ $data->name }}</h5>
                            </td>
                            <td>
                                {{-- <h5>{{ $data->tempat_tinggal }}</h5> --}}
                            </td>
                            <td>
                                {{-- <h5>{{ $data->jenis_kelamin }}</h5> --}}
                            </td>
                            <td>
                                <h5 align="center">{{ $data->email }}</h5>
                            </td>
                        </tr>
                        <h5 class="card-title mb-4"></h5>
                        <p class="card-text mb-4"></p>
                        <a href="{{ route('rekapan.show', $data->id) }}" class="btn btn-outline-secondary w-100 raised" type="submit">LIHAT DETAIL</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
