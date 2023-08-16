<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charger extends Model
{
    use HasFactory;

    protected $table='charger';

    protected $fillable=
    [
        'matiere_id',
        'classe_id',
        'professeur_id',
        'anneeScolaire_id',
        'coefficient',
        'heurechargerparmois',
        'coutparheure'

    ];

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    public function anneeScolaire()
    { 
        return $this->belongsTo(AnneeScolaire::class);

    }

    public function examiners()
    {
        return $this->hasMany(Examiner::class); 

    } 

}
