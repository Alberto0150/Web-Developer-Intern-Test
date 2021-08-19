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
                <h3><em>Deskripsi Pekerjaan</em></h3>
                <P>{!!$detailPosisi->description!!}</p>
            </div>
            <hr>
            <div>
                <h3><em>Syarat Mendaftar</em></h3>
                <p>{!!$detailPosisi->requirements!!}</p>
            </div>
            <button type="button" class="btn btn-success">Daftar</button>
        </div>
        <div id="tag2">
            <div style="padding: 0 3%;">
                <h3 style="text-align:center"><em>Detail Posisi</em></h3>
                <br>
                <h4>Departemen</h4>
                <p>{{$detailPosisi->department}}</p>
                <hr class="solid">
                <h4>Jenis Pekerjaan</h4>
                <p>{{$detailPosisi->type_of_work}}</p>
                <hr class="solid">
                <h4>Lokasi Kerja</h4>
                <p>{{$detailPosisi->location}}</p>
                <hr class="solid">
                <h4>Tanggal dibuka</h4>
                <p>{{$detailPosisi->date_open}}</p>
                <hr class="solid">
                <h4>Tanggal ditutup</h4>
                <p>{{$detailPosisi->date_close}}</p>
            </div>
        </div>
    </div>
</div>
    
@endsection