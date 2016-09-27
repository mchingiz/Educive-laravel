<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Company extends Model
{
	protected $fillable = ['name','definition','address','fax','facebook','instagram','linkedin','website','logo'];
    public function user(){
      

      return $this->belongsTo('App\User');

    }
}
