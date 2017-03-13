<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable{ //Model

    use Notifiable;

    protected $fillable = ['doctor_login','email', 'password', 'sync'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'doctor_login';

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
