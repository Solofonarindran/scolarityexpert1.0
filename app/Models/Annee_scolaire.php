<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee_scolaire extends Model
{
    use HasFactory;

    protected $table='annee_scolaire';

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

    public function chargers()
    {
        return $this->hasMany(Charger::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
}
