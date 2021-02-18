@extends('layout.master')

@section('content')
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>

<div class="container">
        <h4>Create a News</h4>
        <form method="post" action="{{ route('berita.store')}}">
        @csrf
        <div class="form-group row">
          <label for="judul_berita" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" name="judul_berita" id="judul_berita" class="form-control">
          </div>
        </div>
        <div class="form-group row">
            <label for="isi_berita" class="col-sm-2 col-form-label">Isi Berita</label>
            <div class="col-sm-10">
                <textarea  name="isi_berita" id="isi_berita" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-10">
                <input type="text" name="penulis" id="penulis" class="form-control">
            </div>
        </div>
        <div class="form-group row">
          <label for="tgl_terbit" class="col-sm-2 col-form-label">Tgl. Terbit</label>
          <div class="col-sm-10">
            <input type="text" name="tgl_terbit" id="tgl_terbit" class="form-control" placeholder="yyyy/mm/dd">
          </div>
        </div>
        <div class="form-group row">
            <label for="tags" class="col-sm-2 col-form-label">Tag Berita</label>
            <div class="col-sm-10">
                <select name="tag[]" id="tag" class="form-control select2" multiple="multiple">
                  @foreach($tag as $tag)
                  <option value="{{$tag->id}}">"{{$tag->nama}}"</option>
                  @endforeach
                </select>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

            <script type="text/javascript">
                  $("#tag").select2({
                        placeholder: "Select a tags",
                        allowClear: true
                    });
            </script>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/berita" class="btn btn-warning">Batal</a>
          </div>
        </div>
      </form>
  </div>
@endsection
