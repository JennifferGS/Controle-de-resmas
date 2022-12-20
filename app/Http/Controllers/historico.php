<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;



class historico extends Controller
{

    public function show(Request $request)
    {
        $setores = setores::orderby('id')->get();

        $solicitacao = Solicitacao::with('setores')->get();
        $solicitacao->id_setor = $request->input('id_setor');


        $solicitacao = Solicitacao::paginate(7);
        //$data = Cadastro::find('id')->with(['cadastro'])->get();

        return view('historico', ['solicitacao' => $solicitacao], ['setores' => $setores]);

    }

    public function search(Request $request)
    {
      $id_setor = $request->input('id_setor');
      $solicitacao = Solicitacao::where('id_setor', '=', $request->id_setor)->get();
      


    $buscar = [
      'solicitacao' => $solicitacao,
    ];
    return view('historico', $buscar);
    }
      


    public function index(Request $request)
    {}

     

          
}