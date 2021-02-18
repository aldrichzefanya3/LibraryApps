@extends('layout.master')

@section('content')

<div class="container">
  <div class="area">
    <div class="kiri">
        <h4>News</h4>
    </div>
    <div class="kanan">
      <p align="right"><a href="{{ route('berita.create') }}" class="btn btn-primary" align="right" > Tambah Artikel</a></p>
      <p align="right"><a href="{{ route('tag.create') }}" class="btn btn-primary" align="right" > Tambah Tags</a></p>
    </div>

  </div>
    <table class= "table table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Penulis</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_berita as $berita)
            <tr>
                <td>{{ ++$no}}</td>
                <td>{{ $berita->judul_berita}}</td>
                <td>{{ $berita->isi_berita}}</td>
                <td>{{ $berita->penulis}}</td>
                <td>{{ $berita->tgl_terbit}}</td>
                <td>
                  <form action="{{ route('berita.destroy',$berita->id)}}" method="post">
                    @csrf
                    <a href="{{ route('berita.edit',$berita->id)}}" class="btn btn-info">Edit</a>
                    <button onClick="return confirm('Yakin mau dihapus?')" class="btn btn-danger">Hapus</button>
                  </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    {{$data_berita->links()}}
</div>
@endsection
