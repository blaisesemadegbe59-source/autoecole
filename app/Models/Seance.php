<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = ['inscription_id', 'moniteur_id', 'vehicule_id', 'date_heure', 'statut'];

    public function inscription()
    {
        return $this->belongsTo(Inscription::class);
    }

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class);
    }

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
}

