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
        /*$solicitacao = Solicitacao::with(['id_setor', 'id'])->get();*/

        //$solicitacao = Solicitacao::all();

        //$solicitacao = setores::find(1)->solicitacao;

        // $setores = setores::with('solicitacao')->first();

        //$solicitacao = $setores->solicitacao;

        //$solicitacao = Solicitacao::where('id', $setores)->first();

        $solicitacao = Solicitacao::with('setores')->get();

        return view('historico', ['solicitacao' => $solicitacao]);
    }
 public function index(Request $request)
    {            
        $filter_id = $request-> id_setor;
        $filter_name = $request->nome;
        $filter_description = $request->description;
    
        // cria o array que será utilizado no query builder
        $filter_all;
    
        // verifica se veio id
        if($filter_id) {
            $filter_all[] = [ 'id_setor', '=', $filter_id];
        }
    
        // verifica se veio name
        if($filter_name) {
            $filter_all[] = ['nome', 'like', '%'.$filter_name.'%'];
        }
        return view('brand.index', compact('brands'));

    }

}

