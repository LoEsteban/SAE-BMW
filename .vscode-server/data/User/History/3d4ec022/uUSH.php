<?php

namespace App\Http\Controllers;

use App\Models\CompteClient;
use Illuminate\Http\Request;

class CompteClientController extends Controller
{
    public function getCompte_Clients(){
        $compte_clients = CompteClient::all();
        return view('compte_clients', 
        ["compte_clients"=>$compte_clients
    ]);
    }
}
