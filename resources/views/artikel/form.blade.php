@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <form action="/artikel" method="POST">
            @csrf
            
            <div class="form-group" >
                <label for="Nama">Judul</label>
                <input type="text" class="form-control" id="artikel" aria-describedby="emailHelp" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <br>
                <textarea name="isi" id="artikel" cols="50" rows="10"></textarea>
            </div>
            <div class="form-group" >
                <label for="Nama">slug</label>
                <input type="text" class="form-control" id="artikel" aria-describedby="emailHelp" name="slug">
            </div>
            <div class="form-group" >
                <label for="Nama">tag</label>
                <input type="text" class="form-control" id="artikel" aria-describedby="emailHelp" name="tag">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection