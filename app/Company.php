<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Company extends Model
{
	protected $fillable = ['name','user_id','definition','address','phone','phone1','fax','facebook','instagram','linkedin','website','logo'];
    public function user(){


      return $this->belongsTo('App\User');

    }
}
