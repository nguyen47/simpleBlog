<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $table ='posts';

    protected $primaryKey = 'id';

    protected $guarded = [];


    public function Categories(){
      return $this->belongsTo('App\Categories','category_id','id');
    }

    public function Comment(){
    	return $this->hasMany('App\Comment');
    }
}
