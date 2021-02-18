<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'table_berita';

    public function tag(){
      return $this->belongsToMany('App\Tag');
    }
}
