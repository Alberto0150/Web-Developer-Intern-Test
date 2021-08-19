@extends('layouts.app')

@section('content')
<a href="/Lowongan-Kerja" class="btn btn-default">Back</a>
    <h1>{{$detailPosisi->title}}</h1>
    
    <div>
        {{-- parse html input --}}
        {!!$detailPosisi->body!!}
    <div>
    <hr>
    
@endsection