<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $table='examen';

    protected $fillable=
    [
        'examen_title'
    ];

    public function examiners()
    {
        return $this->hasMany(Examiner::class);
    }
}
