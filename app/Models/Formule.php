<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formule extends Model
{
    protected $fillable = ['categorie_id', 'libelle', 'tarif', 'heures_incluses'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
