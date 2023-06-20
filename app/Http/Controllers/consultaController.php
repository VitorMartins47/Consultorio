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


public function processarform(Request $request)
{
    $dadosFormulario = $request->validate([
        'nome' => 'required',
        'email' => 'required',
        'fone' => 'required',
        'mensagem' => 'required',
        'data' => 'required',

    ]);

    Consulta::create($dadosFormulario);

    return redirect('/consulta')->with('success', 'Formulário enviado com sucesso!');
}
}