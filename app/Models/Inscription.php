<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['candidat_id', 'formule_id', 'date_inscription', 'tarif'];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function formule()
    {
        return $this->belongsTo(Formule::class);
    }

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    public function versements()
    {
        return $this->hasMany(Versement::class);
    }
}
