@extends('layout.master')

@section('content')
  <div class="container">
    <h4>Edit Arcticle</h4>
    <form method="post" action="{{ route('berita.update', $berita->id) }}">
      @csrf
      <div class="form-group row">
        <label for="judul_berita" class="col-sm-2 col-form-label">Topics</label>
        <div class="col-sm-10">
          <input type="text" id="judul_berita" name="judul_berita" class="form-control" value="{{$berita->judul_berita}}">
        </div>
      </div>
      <div class="form-group row">
          <label for="isi_berita" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
              <textarea type="text" name="isi_berita" id="isi_berita" class="form-control" value="{{$berita->isi_berita}}"></textarea>
          </div>
      </div>
      <div class="form-group row">
        <label for="penulis" class="col-sm-2 col-form-label">Author</label>
        <div class="col-sm-10">
          <input type="text" id="penulis" name="penulis" class="form-control" value="{{$berita->penulis}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="tgl_terbit" class="col-sm-2 col-form-label">Tgl. Terbit</label>
        <div class="col-sm-10">
          <input type="text" id="tgl_terbit" name="tgl_terbit" class="form-control" value="{{$berita->tgl_terbit}}">
        </div>
      </div>
      <div class="form-group row">
          <label for="Tags" class="col-sm-2 col-form-label">Tag Berita</label>
          <div class="col-sm-10">
              <select name="tag" id="tag" class="form-control">
                @foreach($tag as $tag)
                <option value="{{$tag->id}}">"{{$tag->nama}}"</option>
                @endforeach
              </select>

          </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Update</button>
          <a href="/berita" class="btn btn-warning">Batal</a>
        </div>
      </div>
    </form>
  </div>
@endsection
