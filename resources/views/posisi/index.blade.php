@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Temukan Karir Impianmu Disini!</h1>
            <p class="lead">Mulai mencari karir dan tujuanmu bersama kami</p>
        </div>
        <br>
        <h1><em>Lowongan Kerja Saat Ini</em> </h1>
            @if (count($posisiValue)>0)
                @foreach ($posisiValue as $item)
                <a href="/Lowongan-Kerja/{{$item->id}}">
                    <div class="card" id="posisi-index">
                        <div class="card-body">
                            <div class="well">
                                <h3 class="card-title">{{$item->name}}</h3>
                                <small>Dibuat pada {{$item->created_at}}</small>
                            </div>
                        </div>
                    </div>
                </a>
                <hr>
                @endforeach
            @else 
                <p>Tidak ada Lowongan</p>
            @endif
    </div>
@endsection