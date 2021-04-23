<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaoAcreditoController extends Controller
{
    public function vendo(){
        return view('acredito.vendo');
    }
}
