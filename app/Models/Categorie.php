<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['libelle'];

    public function formules()
    {
        return $this->hasMany(Formule::class);
    }

    public function moniteurs()
    {
        return $this->belongsToMany(Moniteur::class, 'moniteur_habilitations');
    }

    public function vehicules()
    {
        return $this->belongsToMany(Vehicule::class, 'vehicule_categories');
    }
}

