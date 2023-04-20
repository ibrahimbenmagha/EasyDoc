<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
    //
    public function somme($a, $b){
        $res = $a + $b;
        echo 'La somme est : '. $res;      
    }

    public function produit($a, $b){
        $res = $a * $b;
        echo 'Le produit est : '. $res;      
    }

    public function afficher(){
        return view('tp1', ["nom"=>"Ouhlale", "prenom"=>"Othman", "option"=>"Full stack"]);
    }
}
