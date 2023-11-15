<?php

namespace App\Http\Controllers;

use App\Models\Compte_Client;
use Illuminate\Http\Request;

class Compte_ClientController extends Controller
{
    public function getCompte_Clients(){
        $compte_clients = Compte_Client::all();
        return view('compteclients', 
        ["compteclients"=>$compte_clients
    ]);
    }
}
