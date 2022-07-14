@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Data Peminjaman</h3>
            <hr>
            <a href="{{url('pinjam/create')}}" class="btn btn-success btn-sm mb-3">Tambah</a>
            <table class="table table-hover">
                <thead>
                    <tr class="bg-success" style="color: white;">
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                @foreach($data as $x)
                <tr>
                    <td>{{$x->buku}}</td>
                    <td>{{$x->nama}}</td>
                    <td>{{$x->tgl}}</td>
                    <td class="text-center">
                        <form action="{{url('pinjam/'.$x->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <a href="{{url('pinjam/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection