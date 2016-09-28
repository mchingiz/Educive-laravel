<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $fillable=['name','link'];
    public function submenus(){
      return $this->hasMany("App\Submenu");
    }
}
