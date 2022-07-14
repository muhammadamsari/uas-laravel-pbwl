@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Ubah Data</h3>
            <hr>
            <form method="POST" action="{{url('/buku/'.$book->id)}}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control col-4" name="judul" value="{{ $book->judul}}">
                </div>
                <div class="form-group">
                    <label>Nama Penulis</label>
                    <input type="text" class="form-control col-4" name="penulis" value="{{ $book->penulis}}">
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" class="form-control col-4" name="penerbit" value="{{ $book->penerbit}}">
                </div>
                <button type="submit" class="btn btn-outline-warning">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection