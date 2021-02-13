@extends('layout.master')

@section('content')
    <div class="container">
        <h4>Add a Book</h4>
        <form method="post" action="{{ route('buku.store')}}">
        @csrf
        <div class="form-group row">
          <label for="judul_buku" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" name="judul" id="judul" class="form-control">
          </div>
        </div>
        <div class="form-group row">
            <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-10">
                <input type="text" name="penulis" id="penulis" class="form-control">
            </div>
        </div>
        <div class="form-group row">
          <label for="harga" class="col-sm-2 col-form-label">Harga</label>
          <div class="col-sm-10">
            <input type="text" name="harga" id="harga" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tgl_terbit" class="col-sm-2 col-form-label">Tgl. Terbit</label>
          <div class="col-sm-10">
            <input type="text" name="tgl_terbit" id="tgl_terbit" class="form-control" placeholder="yyyy/mm/dd">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/buku" class="btn btn-warning">Batal</a>
          </div>
        </div>
      </form>
  </div>
@endsection
