@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Tambah Data</h3>
            <hr>
            <form method="POST" action="{{url('/anggota')}}">
                @csrf
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input type="text" class="form-control col-4" name="nama">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenkel" id="jenkel1" value="Laki-laki">
                        <label class="form-check-label" for="jenkel1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenkel" id="jenkel2" value="Perempuan">
                        <label class="form-check-label" for="jenkel2">
                            Perempuan
                        </label>
                    </div>
                    <!-- <input type="text" class="form-control col-4" name="penulis"> -->
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control col-4" rows="4"></textarea>
                    <!-- <input type="text" class="form-control col-4" name="penerbit"> -->
                </div>
                <button type="submit" class="btn btn-outline-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection