<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table='rule';

    protected $fillable=
    [
        'libelle'
    ];

    public function professeurs()
    {
        return $this->hasMany(Professeur::class);
    }
}
