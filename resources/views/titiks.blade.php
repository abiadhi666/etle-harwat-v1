{{-- @dd($camera) --}}

@extends('layouts.main')
@section('container')
{{-- Camera & Jaringan 30 Mbps --}}
<div class="d-flex justify-content-between mt-5 mb-3">    
    <h2>List Titik Camera</h2>
</div>      
        @foreach ($titiks as $titik)
        <ul>
            <li>
                <h2><a href="/titiks/{{ $titik->slug }}">{{ $titik->name }}</a></h2>
            </li>
        </ul>
        @endforeach
@endsection