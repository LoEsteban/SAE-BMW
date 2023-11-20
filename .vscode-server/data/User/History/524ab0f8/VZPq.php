<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristique extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomCaracteristique",
        "prixCouleur",
        "descCouleur",
        "photoCouleur"
    ];

    protected $table = 'couleurs';
    protected $primaryKey = 'idmoto';
}
