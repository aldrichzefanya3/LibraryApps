<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
class ApiBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data_buku = Buku::all()->sortByDesc('id');
        return $data_buku;
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
      $buku = new Buku;
      $buku->judul = $request->judul;
      $buku->penulis = $request->penulis;
      $buku->harga = $request->harga;
      $buku->tgl_terbit = $request->tgl_terbit;
      $buku->save();
      return $buku;
    }

    public function getById($id){
      $buku = $buku = Buku::find($id);
      return $buku;
    }
    public function destroy($id){
      $buku = Buku::find($id);
      $buku->delete();
      return "Data sudah dihapus";
    }

    public function edit($id){
      $buku = Buku::find($id);
      return "Data sudah diedit\n $buku ";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_buku = Buku::with('table_buku')->get('id')->toArray();
        return $data_buku;
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
