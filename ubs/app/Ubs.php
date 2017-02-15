<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubs extends Model
{
	protected $table = 'ubses';
	
    protected $fillable = ['id', 'name', 'address_id', 'sync'];

    protected $dates = ['deleted_at'];

    function persons() {
        return $this->hasMany('App\Person');
    }
    function address() {
        return $this->hasMany('App\address');
    }
}
