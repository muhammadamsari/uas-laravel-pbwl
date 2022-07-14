@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="{{url('/pinjam')}}">
        @csrf
        <div class="form-group">
            <label>Judul Buku</label>
            <select name="buku" class="form-control col-4">
                <option selected>Pilih Buku</option>
                <option>==========================</option>
                @foreach($data as $x)
                <option value="{{$x->judul}}">{{$x->judul}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama Peminjam</label>
            <select name="nama" class="form-control col-4">
                <option selected>Pilih Nama</option>
                <option>==========================</option>
                @foreach($data1 as $y)
                <option value="{{$y->nama}}">{{$y->nama}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection