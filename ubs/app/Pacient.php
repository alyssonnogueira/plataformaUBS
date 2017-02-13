<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $fillable = ['sus', 'height', 'weight', 'skinColor', 'locomotionProblem', 'bedridden', 'osteoporosis', 'depression', 'insanity', 'needCare', 'armPerimeter', 'dm', 'has', 'bookSenior', 'oralHealthRisk', 'person_pacient', 'logo', 'password'];

    protected $dates = ['deleted_at'];

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }
    public function auditions()
    {
        return $this->hasMany('App\Audition');
    }
    
    function person() {
        return $this->belongsTo('App\Person');
    }

}