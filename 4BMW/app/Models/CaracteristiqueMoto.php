<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristiqueMoto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomCaracteristique",
        "valeurCaracteristique",
        "uniteMesure",
    ];

    protected $table = 'caracteristiques_moto';
    protected $primaryKey = 'idcaracteristique';
}
