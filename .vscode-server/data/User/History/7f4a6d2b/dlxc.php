<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieEquipementMoto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomCategorie",
    ];

    protected $table = 'categories_equipement_moto';
    protected $primaryKey = 'idcategorieequipementmoto';
}
