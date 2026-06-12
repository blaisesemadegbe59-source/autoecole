<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Versement extends Model
{
    protected $fillable = ['inscription_id', 'date_versement', 'montant', 'mode_paiement', 'reference'];

    public function inscription()
    {
        return $this->belongsTo(Inscription::class);
    }
}
