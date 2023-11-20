<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomCouleur",
        "prixCouleur",
        "descCouleur",
        ""
    ];

    protected $table = 'motos_configurables';
    protected $primaryKey = 'idmoto';
}
