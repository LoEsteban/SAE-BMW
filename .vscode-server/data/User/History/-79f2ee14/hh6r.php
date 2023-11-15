<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte_Client extends Model
{
    protected $fillable = [
        "langue",
        "concessionniare",
        "infospersos",
        "prenomclient",
        "nomclient",
        "civilite",
        "datenaissance",
        "photoprofil",
        "communicationsmarketting",
        "offrespersonnalisees",
        "keepmeinformed",
        "emailclient",
        "motdepasseclient",
        "estactive",
        "typecompte"
    ];
}
