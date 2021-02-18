<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Berita;
use App\Tag;
class BeritaController extends Controller
{
    public function index(){

        $data_berita = DB::table('table_berita')->paginate(10);
        $no = 0;
        return view('berita.index',compact('data_berita','no'));
    }

    public function create(){
        $tag = Tag::all();
        return view('berita.create',compact('tag'));
    }

    public function store(Request $request){
      $berita = new Berita;
      $berita->judul_berita = $request->judul_berita;
      $berita->isi_berita = $request->isi_berita;
      $berita->penulis = $request->penulis;
      $berita->tgl_terbit = $request->tgl_terbit;
      $berita->save();
      $berita->tag()->sync($request->tag);
      return redirect('/berita');
    }

    public function destroy($id){
      $berita = Berita::find($id);
      $berita->delete();
      return redirect('/berita');
    }

    public function edit($id){
      $berita = Berita::find($id);
      $tag = Tag::all();
      return view('berita.edit',compact('berita','tag'));
    }

    public function update(Request $request, $id){
      $berita = Berita::find($id);
      $berita->judul_berita = $request->judul_berita;
      $berita->isi_berita = $request->isi_berita;
      $berita->penulis = $request->penulis;
      $berita->tgl_terbit = $request->tgl_terbit;
      $berita->update();
      $berita->tag()->sync($request->tag);
      return redirect('/berita');
    }
}
