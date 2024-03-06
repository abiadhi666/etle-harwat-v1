{{-- @dd($camera_dailies) --}}

@extends('layouts.main')
@section('container')
{{-- Camera & Jaringan 30 Mbps --}}
<div class="d-flex justify-content-between mt-5 mb-3">    
    <h2>Camera & Jaringan 30 Mbps</h2>
    <button type="button" class="btn btn-primary">Tambah</button>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Titik Camera</th>
            <th>User</th>
            <th>Catatan</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>        
        @foreach ($camera_dailies as $daily_camera)
        <tr>
            <td>{{ $daily_camera->created_at }}</td>
            <td>{{ $daily_camera->titik->name }}</td>
            <td>{{ $daily_camera->user->name }}</td>
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
{{-- 100Mbps & Server --}}
{{-- <div class="d-flex justify-content-between mt-5 mb-3">    
    <h2>100 Mbps & Server</h2>
    <button type="button" class="btn btn-primary">Tambah</button>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>User</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>        
        <tr>
            <td>15/01/2024</td>
            <td>Hendri</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success btn-sm">Detail</button>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>16/01/2024</td>
            <td>Hendri</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success btn-sm">Detail</button>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </td>
        </tr>
    </tbody>
</table> --}}

{{-- Bo & FO --}}
{{-- <div class="d-flex justify-content-between mt-5 mb-3">    
    <h2>BO & FO</h2>
    <button type="button" class="btn btn-primary">Tambah</button>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Kota/Kabupaten</th>
            <th>User</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>        
        <tr>
            <td>15/01/2024</td>
            <td>Palembang</td>
            <td>Hendri</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success btn-sm">Detail</button>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>16/01/2024</td>
            <td>Palembang</td>
            <td>Hendri</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success btn-sm">Detail</button>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </td>
        </tr>
    </tbody>
</table> --}}
@endsection