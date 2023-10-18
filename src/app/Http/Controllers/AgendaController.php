<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;

use App\Http\Requests\AgendaRequest;

class AgendaController extends Controller
{
    public function listar()
    {
        $agenda = Agenda::all();

        return response()->json([
            "data"  => $agenda
        ], 200);

    }

    public function cadastrar(AgendaRequest $request)
    {

        $nome = $request->input('nome');
        $telefone = $request->input('telefone');

        $contato = new Agenda();
        $contato->nome = $nome;
        $contato->telefone = $telefone;
        $contato->save();

        return response()->json([
            "data"    => $contato
        ],201);

    }

    public function visualizar($id)
    {

        $contato = Agenda::find($id);

        return response()->json([
            "message" => "Contato",
            "data"    => $contato
        ]);
    }

    public function atualizar(AgendaRequest $request)
    {
        $id = $request->input('id');
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');

        $contato = Agenda::find($id);

        $contato->nome = $nome;
        $contato->telefone = $telefone;
        $contato->save();


        return response()->json([
            "data"     => $contato
        ],200);

    }

    public function deletar($id){
        $agenda = Agenda::find($id);

        $agenda->delete();

        return response()->json([
            "message" => "contato removido com sucesso."
        ],200);
    }

}
