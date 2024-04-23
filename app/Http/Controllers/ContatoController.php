<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Exception;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * renderiza a pagina de contato
     * 
     * @return view
    */
    public function contato()
    {
        return view('contato');
    }

    /**
     * 
    */
    public function enviarFormulario(Request $request)
    {
        try{
            Contato::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'mensagem' => $request->mensagem,
                'assunto' => $request->assunto,
            ]);

            return back()->withSuccess('Formulário enviado');
        } catch (Exception $exception) {
            return back()->withErros($exception->getMessage());
        }
    }
}

