<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['person_doctor', 'boss', 'crm', 'created_at', 'updated_at'];

    protected $dates = ['deleted_at'];

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }
    public function auditions()
    {
        return $this->hasMany('App\Audition');
    }

    function login() {
        return $this->belongsTo('App\Login');
    }

    function person() {
        return $this->belongsTo('App\Person');
    }
}
