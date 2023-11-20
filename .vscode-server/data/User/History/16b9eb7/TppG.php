<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoConfigurable extends Model
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

    protected $table = 'motos_configurables';
    protected
}
