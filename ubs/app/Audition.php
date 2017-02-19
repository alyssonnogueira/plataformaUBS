<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audition extends Model
{
    protected $fillable = ['person_doctor', 'person_pacient', 'seqAudition', 'nutrition', 'hearing', 'vision', 'humor_depression', 'cognition_memory', 'daily_activies', 'tumble', 'created_date', 'updated_date', 'sync', ];

    protected $dates = ['deleted_at'];

    function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    function pacient() {
        return $this->belongsTo('App\Pacient');
    }

}