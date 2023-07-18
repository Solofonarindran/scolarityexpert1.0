<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $table='eleve';

    protected $fillable=
    [
        'name',
        'date_naiss',
        'adress',
        'inne',
        'parent_id'
    ];

    public function geniteur() 
    {
        return $this->belongsTo(Geniteur::class);
    }

    public function inscrits()
    {
        return $this->hasMany(Inscrit::class);
    }
    
    public function examiners()
    {
        return $this->hasMany(Examiner::class);
    }
}
