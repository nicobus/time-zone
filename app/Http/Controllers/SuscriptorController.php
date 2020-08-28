<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscriptor;

class SuscriptorController extends Controller
{
    public function suscribir(Request $req){
      

        $suscriptor  = new Suscriptor;
        $suscriptor->email = $req['email'];
        $suscriptor->save();
    }
}
