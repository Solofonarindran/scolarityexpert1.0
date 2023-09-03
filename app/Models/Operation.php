<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $table='operation';

    protected $fillable=
    [
        'motif',
        'montant',
        'nb',
        'anneescolaire_id',
        'professeur_id'
    ];

    public function anneescolaire()
    {
        return $this->belongsTo(Anneescolaire::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
}
