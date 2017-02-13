<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audition extends Model
{
    protected $fillable = ['seqAudition', 'nutrition', 'hearing', 'vision', 'humor_depression', 'cognition_memory', 'daily_activies', 'tumble', 'create_date', 'update_date', 'sync'];

    protected $dates = ['deleted_at'];

    function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    function pacient() {
        return $this->belongsTo('App\Pacient');
    }

}