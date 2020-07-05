@extends('layouts.master')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Slug</th>
            <th scope="col">Tag</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $key => $artikel)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$artikel->judul}}</td>
                    <td>{{$artikel->isi}}</td>
                    <td>{{$artikel->slug}}</td>
                    <td>{{$artikel->tag}}</td>
                    <td>
                        <a href="/artikel/{{$artikel->id}}" class="btn btn-sm btn-info">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection