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
        'annee_scolaire_id',
        'classe_id',
        'nb_moisPayé',
        'montant_restant',
        'frais_finish',
        'tm_finish',
        'friandise_finish',
        'participation_finish',
        'droit_finish'
    ];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function annee_scolaire()
    {
        return $this->belongsTo(Annee_scolaire::class);
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
