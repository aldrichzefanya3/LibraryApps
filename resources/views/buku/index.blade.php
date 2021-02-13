@extends('layout.master')

@section('content')

<div class="container">
  <div class="area">
    <div class="kiri">
        <h4>Data Buku</h4>
    </div>
    <div class="kanan">
      <p align="right"><a href="{{ route('buku.create') }}" class="btn btn-primary" align="right" > Tambah Buku</a></p>
    </div>
  </div>
    <table class= "table table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <td>{{ ++$no}}</td>
                <td>{{ $buku->judul}}</td>
                <td>{{ $buku->penulis}}</td>
                <td>{{ $buku->harga}}</td>
                <td>{{ $buku->tgl_terbit}}</td>
                <td>
                  <form action="{{ route('buku.destroy',$buku->id)}}" method="post">
                    @csrf
                    <a href="{{ route('buku.edit',$buku->id)}}" class="btn btn-info">Edit</a>
                    <button onClick="return confirm('Yakin mau dihapus?')" class="btn btn-danger">Hapus</button>
                  </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    {{$data_buku->links()}}
</div>
@endsection
