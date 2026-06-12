<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'specialite'];

    public function categories()
    {
        return $this->belongsToMany(Categorie::class, 'moniteur_habilitations');
    }

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}

