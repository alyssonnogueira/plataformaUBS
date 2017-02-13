<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['seqConsultation', 'blood_presure','weight', 'observations', 'physical_exam', 'foot_exam', 'create_date', 'update_date', 'sync'];

    protected $dates = ['deleted_at'];

     function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    function pacient() {
        return $this->belongsTo('App\Pacient');
    }
}