<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model
{
    use HasFactory;

    protected $table='mouvement';

    protected $fillable=
    [
        'libelle',
        'nb',
        'montant',
        'inscrit_id',
        'anneescolaire_id'
    ];

    public function inscrit()
    {
        return $this->belongsTo(Inscrit::class);
    }

  

    
}
