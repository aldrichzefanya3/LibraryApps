<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class ApiTagController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function list()
  {
      $data_tag = Tag::all()->sortByDesc('id');
      return $data_tag;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $tag = new Tag;
    $tag->nama = $request->nama;
    $tag->save();
    return $tag;
  }

  public function getById($id){
    $tag = $tag = Tag::find($id);
    return $berita;
  }
  public function destroy($id){
    $berita = Tag::find($id);
    $berita->delete();
    return "Data sudah dihapus";
  }

  public function edit($id){
    $tag = Tag::find($id);
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
      $data_tag = Tag::with('table_tag')->get('id')->toArray();
      return $data_tag;
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
