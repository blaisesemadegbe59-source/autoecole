<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = ['nom', 'prenom', 'date_naissance', 'email', 'telephone'];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function examens()
    {
        return $this->hasMany(Examen::class);
    }
}


