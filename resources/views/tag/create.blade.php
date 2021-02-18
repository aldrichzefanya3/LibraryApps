@extends('layout.master')

@section('contentTag')

    <div class="container">
        <h4>Create a Tags</h4>
        <form method="post" action="{{ route('tag.store')}}">
        @csrf
        <div class="form-group row" margin-left:"100px;" >
          <label for="nama" class="col-sm-2 col-form-label">Add a Tags</label>
          <div class="col-sm-10">
            <input type="text" name="nama" id="nama" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/berita" class="btn btn-warning">Batal</a>
          </div>
        </div>
      </form>
  </div>

  <div class="container">
    <div class="area">
      <div class="kiri">
          <h4>Tags</h4>
      </div>
    </div>
      <table class= "table table-stripped">
          <thead>
              <tr>
                  <th>Nama Tag</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($data_tag as $tag)
              <tr>
                  <td>{{ $tag->nama}}</td>
                <td  d>  <form action="{{ route('tag.destroy',$tag->id)}}" method="post">
                    @csrf
                    <a href="{{ route('tag.edit',$tag->id)}}" class="btn btn-info">Edit</a>
                    <button onClick="return confirm('Yakin mau dihapus?')" class="btn btn-danger">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <br/>

  </div>

@endsection
