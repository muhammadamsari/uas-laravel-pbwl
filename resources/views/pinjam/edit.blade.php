@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Ubah Data</h3>
    <hr>
    <form method="POST" action="{{url('/pinjam/'.$pinjam->id)}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label>Judul Buku</label>
            <select name="buku" class="form-control col-4">
                <option value="{{$pinjam->buku}}" selected>{{$pinjam->buku}}</option>
                <option>==========================</option>
                @foreach($data as $x)
                <option value="{{$x->judul}}">{{$x->judul}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama Peminjam</label>
            <select name="nama" class="form-control col-4">
                <option value="{{$pinjam->nama}}" selected>{{$pinjam->nama}}</option>
                <option>==========================</option>
                @foreach($data1 as $y)
                <option value="{{$y->nama}}">{{$y->nama}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-warning">Ubah</button>
    </form>
</div>
@endsection