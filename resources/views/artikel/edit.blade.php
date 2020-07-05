@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <form action="/artikel/{{$artikels->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group" >
                <label for="Nama">Judul</label>
                <input type="text" class="form-control" id="artikel" aria-describedby="emailHelp" name="judul" value="{{$artikels->judul}}">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <br>
                <textarea name="isi" id="artikel" cols="50" rows="10" value="{{$artikels->isi}}"></textarea>
            </div>
            <div class="form-group" >
                <label for="Nama">slug</label>
                <input type="text" class="form-control" id="artikel" aria-describedby="emailHelp" name="slug" value="{{$artikels->slug}}">
            </div>
            <div class="form-group" >
                <label for="Nama">tag</label>
                <input type="text" class="form-control" id="artikel" aria-describedby="emailHelp" name="tag" value="{{$artikels->tag}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection