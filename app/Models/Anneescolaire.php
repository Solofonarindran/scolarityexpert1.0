<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anneescolaire extends Model
{
    use HasFactory;

    protected $table='anneescolaire';

    protected $fillable=
    [
        'libelle',
        'nb_mois',
        'debut_annee',
        'actif'
    ];

    public function inscrits()
    {
        return $this->hasMany(Inscrit::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }
   /* public function classes()
    {
        return $this->belongsToMany(AnneeScolaire::class,'anneeScolaire_classe','classe_id','anneeScolaire_id')
                    ->withPivot('effectifActu','tauxreussite','dispo');
    }*/
}
