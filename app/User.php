<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function byEmail($email){
        return static::whereEmail($email)->first();
    }

    public function Activations(){
        return $this->hasOne('App\activations');
    }

    public function RoleUser(){
        return $this->hasMany('App\RoleUser');
    }

    public function Comment(){
        return $this->hasMany('App\Comment');
    }
}
