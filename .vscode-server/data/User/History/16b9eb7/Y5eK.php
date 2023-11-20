<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "marque",
        "couleur",
        "prix"
    ];

    protected $casts = [
        "prix" => "integer"
    ];
}
