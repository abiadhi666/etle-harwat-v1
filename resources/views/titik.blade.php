@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between mt-2 mb-3">
        <h2>Titik : {{ $titik }}</h2>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Catatan</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($camera as $daily_camera)
                <tr>
                    <td>{{ $daily_camera->catatan }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="/harwat-daily/{{ $daily_camera->slug }}" class="btn btn-success btn-sm">Detail</a>
                            <a class="btn btn-warning btn-sm">Edit</a>
                            <a class="btn btn-danger btn-sm">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
