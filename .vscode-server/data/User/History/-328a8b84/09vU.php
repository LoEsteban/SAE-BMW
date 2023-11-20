<?php

namespace App\Http\Controllers;

use App\Models\MotoConfigurable;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function index(){
        return view ("list-motos", ['motos'=>MotoConfigurable::all() ]);
    }
}
