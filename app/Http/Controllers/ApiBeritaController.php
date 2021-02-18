<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class ApiBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data_berita = Berita::all()->sortByDesc('id');
        return $data_berita;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $berita = new Berita;
      $berita->judul_berita = $request->judul_berita;
      $berita->isi_berita = $request->isi_berita;
      $berita->penulis = $request->penulis;
      $berita->tgl_terbit = $request->tgl_terbit;
      $berita->save();
      return $berita;
    }

    public function getById($id){
      $berita = Tag::find($id);
      return $berita;
    }
    public function destroy($id){
      $berita = Berita::find($id);
      $berita->delete();
      return "Data sudah dihapus";
    }

    public function edit($id){
      $berita = Berita::find($id);
      return "Data sudah diedit\n $berita ";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_berita = Berita::with('table_berita')->get('id')->toArray();
        return $data_berita;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
