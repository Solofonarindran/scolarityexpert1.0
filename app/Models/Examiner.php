<?php

namespace App\Models;

use App\Models\Charger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'inscrit_id'
    ];

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

    public function charger()
    {
        return $this->belongsTo(Charger::class);
    }

    public function inscrit()
    {
        return $this->belongsTo(Inscrit::class);
    }


}
