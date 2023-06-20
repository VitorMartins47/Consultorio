<?php

namespace App\Http\Controllers;
use App\Models\consulta;

use Illuminate\Http\Request;

class consultaController extends Controller
{
    public function exibirform()
    {
        
      return view('/consultorio.consulta');
        
    }
}
