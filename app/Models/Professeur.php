<?php

namespace App\Models;

use App\Models\Operation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professeur extends Model
{
    use HasFactory;

    protected $table='professeur';

    protected $fillable=
    [
        'name',
        'firstname',
        'adress',
        'phone',
        'rule_id'
    ];

    public function rule()
    {
        return $this->belongsTo(Rule::class);
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
