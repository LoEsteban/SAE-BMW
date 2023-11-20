<?php

namespace App\Http\Controllers;

use App\Models\MotoConfigurable;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function getAll(){
        return view ("list-motos", ['motos'=>MotoConfigurable::all() ]);
    }
}
