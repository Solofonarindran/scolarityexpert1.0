<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table='classe';

    protected $fillable=
    [
        'libelle',
        'effectifmax',
        'frais_scolaire',
        'bareme',
        'cycle_id'
    ];

    public function classe()
    {
        return $this->hasOne(Classe::class);
    }

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }

    public function chargers()
    {
        return $this->hasMany(Charger::class);
    }

    public function inscrits()
    {
        return $this->hasMany(Inscrit::class);
    }

    public function anneeScolaires()
    {
        return $this->belongsToMany(AnneeScolaire::class)
                    ->withPivot('effectifActu','tauxreussite','dispo');
    }
    
}
