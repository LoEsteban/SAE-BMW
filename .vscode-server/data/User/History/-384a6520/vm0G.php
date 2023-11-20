<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipementMoto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomEquipementMoto",
        "prixEquipementMoto",
        "descEquipementMoto",
        "photoEquipementMoto"
    ];

    protected $table = 'equipements_moto';
    protected $primaryKey = 'idequipementmoto';
}
