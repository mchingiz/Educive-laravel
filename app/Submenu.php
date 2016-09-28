<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable=['name','menu_id','link'];
    public function menu(){
    return $this->belongsTo("App\Menu");
    }
    public function category(){
    return $this->hasOne("App\Category");
    }
}
