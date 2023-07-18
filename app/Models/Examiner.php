<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examiner extends Model
{
    use HasFactory;

    protected $table='examiner';

    protected $fillable=
    [
        'date_examen',
        'note',
        'examen_id',
        'charger_id',
        'eleve_id'
    ];

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

    public function charger()
    {
        return $this->belongsTo(Charger::class);
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
}
