<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','type','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


        public function posts(){
          return $this->hasMany('App\Post');
        }

        public function company(){
          return $this->hasOne('App\Company');
        }

        public function followers(){
            return $this->belongsToMany('App\User', 'followers', 'follow_id', 'user_id');
        }
        public function following(){
            return $this->belongsToMany('App\User', 'followers', 'user_id', 'follow_id');
        }
}


