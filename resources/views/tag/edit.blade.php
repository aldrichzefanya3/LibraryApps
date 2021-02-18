@extends('layout.master')

@section('contentTag')
    <div class="container">
        <h4>Edit Tag</h4>
        <form method="post" action="{{ route('tag.update', $tag->id) }}">
        @csrf
        <div class="form-group row" margin-left:"100px;" >
          <label for="nama" class="col-sm-2 col-form-label">Add a Tags</label>
          <div class="col-sm-10">
            <input type="text" name="nama" id="nama" class="form-control" value="{{$tag->nama}}">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/tag.create" class="btn btn-warning">Batal</a>
          </div>
        </div>
      </form>
  </div>
  @endsection
