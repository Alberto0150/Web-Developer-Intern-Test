@extends('layouts.app')

@section('content')
    <h1>Lowongan Kerja Saat Ini </h1>
    @if (count($posisiValue)>0)
        @foreach ($posisiValue as $item)
            <div class="well">
                <h3><a href="/Lowongan-Kerja/{{$item->id}}">{{$item->title}}</a></h3>
                <small>Written on {{$item->created_at}}</small>
            </div>
        @endforeach
    @else 
        <p>No Posts Data </p>
    @endif
@endsection