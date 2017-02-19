<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['person_doctor', 'person_pacient', 'seqConsultation', 'blood_presure','weight', 'observations', 'physical_exam', 'foot_exam', 'created_date', 'updated_date', 'sync'];

    protected $dates = ['deleted_at'];

     function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    function pacient() {
        return $this->belongsTo('App\Pacient');
    }
}