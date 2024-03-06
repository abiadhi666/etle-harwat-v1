@extends('layouts.main')

@section('container')
    <div class="mt-5">
        <nav aria-label="breadcrumb mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none"><a href="/">Home</a></li>
                <li class="breadcrumb-item text-decoration-none"><a
                        href="/titiks/{{ $camera_dailies->titik->slug }}">{{ $camera_dailies->titik->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Example</li>
            </ol>
        </nav>
    </div>
    <h5 class="mt-2">Harwat Daily Detail - {{ $camera_dailies->titik->name }}(12/01/23)</h5>
    <h6>By <a href="#" class="text-decoration-none">{{ $camera_dailies->user->name }}</a></h6>
    <div class="row mt-3">
        <div class="col-12 col-md-6 mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <div class="input-group date" id="datepicker">
                <input type="text" class="form-control" value="{{ $camera_dailies->created_at }}" disabled readonly>
                <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="user" class="form-label">User</label>
            <input class="form-control" type="text" id="user" value="{{ $camera_dailies->user->name }}" disabled
                readonly>
        </div>
        <div class="col-12 mb-3">
            <label for="titik" class="form-label">Titik</label>
            <select class="form-select" disabled>
                <option selected>{{ $camera_dailies->titik->name }}</option>
            </select>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraTerhubung" class="form-label">Camera Terhubung Server</label>
            <input class="form-control" type="file" id="cameraTerhubung" multiple disabled readonly>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraTerhubungKet" class="form-label">Keterangan</label>
            <textarea class="form-control" type="text" id="cameraTerhubungKet" value="" disabled readonly></textarea>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraRealtime" class="form-label">Camera Real-time</label>
            <input class="form-control" type="file" id="cameraRealtime" multiple disabled readonly>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraRealtimeKet" class="form-label">Keterangan</label>
            <textarea class="form-control" type="text" id="cameraRealtimeKet" value="" disabled readonly></textarea>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraPlat" class="form-label">Camera Deteksi Plat Nomor</label>
            <input class="form-control" type="file" id="cameraPlat" multiple disabled readonly>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraPlatKet" class="form-label">Keterangan</label>
            <textarea class="form-control" type="text" id="cameraPlatKet" value="" disabled readonly></textarea>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="jenisPelanggaran" class="form-label">Deteksi Jenis Kendaraan</label>
            <input class="form-control" type="file" id="jenisPelanggaran" multiple disabled readonly>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="jenisPelanggaranKet" class="form-label">Keterangan</label>
            <textarea class="form-control" type="text" id="jenisPelanggaranKet" value="" disabled readonly></textarea>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraTp" class="form-label">Camera Terintegrasi Terminal TP-50</label>
            <input class="form-control" type="file" id="cameraTp" multiple disabled readonly>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="cameraTpKet" class="form-label">Keterangan</label>
            <textarea class="form-control" type="text" id="cameraTpKet" value="" disabled readonly></textarea>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="statusOnline" class="form-label">Status Online</label>
            <input class="form-control" type="file" id="statusOnline" multiple disabled readonly>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="statusOnlineKet" class="form-label">Keterangan</label>
            <textarea class="form-control" type="text" id="statusOnlineKet" value="" disabled readonly></textarea>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="dataTraffic" class="form-label">Data Traffic</label>
            <input class="form-control" type="file" id="dataTraffic" multiple disabled readonly>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <label for="dataTrafficKet" class="form-label">Keterangan</label>
            <textarea class="form-control" type="text" id="dataTrafficKet" value="" disabled readonly></textarea>
        </div>
        <div class="col-12 col-md-12 mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <textarea class="form-control" type="text" id="catatan" disabled readonly>{{ $camera_dailies->catatan }}</textarea>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-warning" href="/harwat-daily">Back</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection
