<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buku; //memuat/memanggil model buku yang didalamnya ada tabel buku
class BukuController extends Controller
{
    public function index(){

        $data_buku = DB::table('table_buku')->paginate(10);
        $no = 0;
        return view('buku.index',compact('data_buku','no'));//compact-> mengirimkan variable controller ke view.Dalam kasus ini variable data buku yg dikirimkan
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id){
      $buku = Buku::find($id);
      $buku->delete();
      return redirect('/buku');
    }

    public function edit($id){
      $buku = Buku::find($id);
      return view('buku.edit',compact('buku'));
    }

    public function update(Request $request, $id){
      $buku = Buku::find($id);
      $buku->judul = $request->judul;
      $buku->penulis = $request->penulis;
      $buku->harga = $request->harga;
      $buku->tgl_terbit = $request->tgl_terbit;
      $buku->update();
      return redirect('/buku');
    }
}
