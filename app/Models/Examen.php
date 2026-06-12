<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $fillable = ['candidat_id', 'categorie_id', 'date_examen', 'type', 'resultat'];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}

