<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GammeMoto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomGamme",
    ];

    protected $table = 'gammes_moto';
    protected $primaryKey = 'idgamme';
    
}
