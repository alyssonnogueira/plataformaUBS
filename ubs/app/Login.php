<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $fillable = ['email', 'password', 'sync'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
