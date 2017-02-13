<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $fillable = ['name', 'cpf', 'birth', 'rg', 'phone', 'email', 'civil_status', 'sync', 'ubs_id'];

    protected $dates = ['deleted_at'];

    function pacient() {
        return $this->belongsTo('App\Pacient');
    }
    function doctor() {
        return $this->belongsTo('App\Doctor');
    }
    function address() {
        return $this->belongsTo('App\Address');
    }
}