<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipementMoto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomPack",
        "prixPack",
        "descPack",
        "photoPack"
    ];

    protected $table = 'packs';
    protected $primaryKey = 'idpack';
}
