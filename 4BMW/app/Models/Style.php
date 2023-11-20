<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomStyle",
        "prixStyle",
        "descStyle",
        "photoStyle"
    ];

    protected $table = 'styles';
    protected $primaryKey = 'idstyle';
}
