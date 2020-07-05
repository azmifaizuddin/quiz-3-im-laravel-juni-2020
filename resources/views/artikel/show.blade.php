@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Artikel</h3>
        <p>Judul : {{$artikels->judul}}</p>
        <p>Isi : {{$artikels->isi}}</p>
        <p>Slug : {{$artikels->slug}}</p>
        <p>Tag : {{$artikels->tag}}</p>
    </div>
@endsection