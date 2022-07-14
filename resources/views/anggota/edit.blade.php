@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Ubah Data</h3>
            <hr>
            <form method="POST" action="{{url('/anggota/'.$member->id)}}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input type="text" class="form-control col-4" name="nama" value="{{$member->nama}}">
                </div>
                <div class="form-group">

                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" @if($member->jenkel == 'Laki-laki') checked @endif name="jenkel" id="jenkel1" value="Laki-laki">
                        <label class="form-check-label" for="jenkel1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenkel" id="jenkel2" value="Perempuan" @if($member->jenkel == 'Perempuan') checked @endif>
                        <label class="form-check-label" for="jenkel2">
                            Perempuan
                        </label>
                    </div>
                    <!-- <input type="text" class="form-control col-4" name="penulis"> -->
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <!-- <textarea name="alamat" class="form-control col-4" rows="4"></textarea> -->
                    <input type="text" class="form-control col-4" name="alamat" value="{{$member->alamat}}">
                </div>
                <button type="submit" class="btn btn-outline-warning">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection