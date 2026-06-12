<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = ['immatriculation', 'modele', 'marque', 'annee'];

    public function categories()
    {
        return $this->belongsToMany(Categorie::class, 'vehicule_categories');
    }

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}

