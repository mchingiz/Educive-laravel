<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable=['title','body','image','deadline','status'];

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }

    public function categories(){
      return $this->belongsToMany('App\Category','post_category');
    }
}
