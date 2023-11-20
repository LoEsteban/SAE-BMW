<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieCaracteristique extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "nomCategorieCaracteristique",
    ];

    protected $table = 'motos_configurables';
    protected $primaryKey = 'idmoto';
}
