<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table ='categories';

    protected $primaryKey = 'id';
    
    public function Posts(){
      return $this->hasMany('App\Posts','category_id');
    }
}
