<?php

namespace App;

use App\Address;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['id', 'country', 'state', 'city', 'neighboorhood', 'zip', 'street', 'number', 'complement', 'sync', 'updated_at', 'created_at'];

    protected $dates = ['deleted_at'];

    public function ubses()  {
    	return $this->hasMany('App\Ubs');
  	}

  	public function persons()  {
    	return $this->hasMany('App\Persons');
  	}
/*
 	public function Address(){
    	return $this->hasMany(Images::class);
  	}
*/
}
