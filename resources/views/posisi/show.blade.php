@extends('layouts.app')

@section('content')
<div class="cut-width">
    <a href="/Lowongan-Kerja" class="btn btn-primary" style="margin: 0.5%">Kembali</a>
    <h1>{{$detailPosisi->name}}</h1>
    <div id="thetimer">
        <p>Tutup dalam:<timer-posisi end="{{$detailPosisi->date_close}}" ></timer-posisi></p>
    </div>
    <div class="custom-container-2">
        <div id="tag1">
            
            <div>
                <h3>Deskripsi Pekerjaan</h3>
                <P>{!!$detailPosisi->description!!}</p>
            </div>
            <hr>
            <div>
                <h3>Syarat Mendaftar</h3>
                <p>{!!$detailPosisi->requirements!!}</p>
            </div>
            <button type="button" class="btn btn-success">Daftar</button>
        </div>
        <div id="tag2">
            <h2>Detail Posisi<h2>
            <h3>Departemen</h3>
            <p>{{$detailPosisi->department}}</p>
            <hr class="solid">
            <h3>Jenis Pekerjaan</h3>
            <p>{{$detailPosisi->type_of_work}}</p>
            <hr class="solid">
            <h3>Lokasi Kerja</h3>
            <p>{{$detailPosisi->location}}</p>
            <hr class="solid">
            <h3>Tanggal dibuka</h3>
            <p>{{$detailPosisi->date_open}}</p>
            <hr class="solid">
            <h3>Tanggal ditutup</h3>
            <p>{{$detailPosisi->date_close}}</p>
        </div>
    </div>
</div>
    
@endsection