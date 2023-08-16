<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrit extends Model
{
    use HasFactory;

    protected $table='inscrit';

    protected $fillable=
    [
        'eleve_id',
        'anneescolaire_id',
        'classe_id',
        'nb_moisPayé',
        'montant_restant',
        'frais_finish',
        'tm_finish',
        'friandise_finish',
        'participation_finish',
        'droit_finish',
        'is_reinscrit'
    ];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function anneescolaire()
    {
        return $this->belongsTo(Anneescolaire::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }

    public function contrats()
    {
        return $this->hasMany(Contrat::class);
    }

    
}
