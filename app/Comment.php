<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
	protected $table ='comment';

	protected $primaryKey = 'id';

	public function User(){
		return $this->belongsTo('App\User');
	}
	public function Posts(){
		return $this->belongsTo('App\Posts');
	}
}
