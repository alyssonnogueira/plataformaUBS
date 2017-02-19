<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $fillable = ['doctor_login','email', 'password', 'sync'];

    #protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
