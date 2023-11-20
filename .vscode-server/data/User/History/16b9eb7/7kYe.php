<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoConfigurable extends Model
{
    use HasFactory;

    protected $fillable = [
        "idmoto",
        "nomMoto",
        "prixMoto",
        "descriptionMoto"
    ];

    protected $table = 'motos_configurables';
    protected $primaryKey = 'idmoto';

}
