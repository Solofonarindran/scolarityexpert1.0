<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geniteur extends Model
{
    use HasFactory;

    protected $table='geniteur';

    protected $fillable=
    [
        'name_father',
        'firstname_father',
        'name_mother',
        'firstname_mother',
        'CIN_father',
        'CIN_mother',
        'phone'

    ];

    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }
}
