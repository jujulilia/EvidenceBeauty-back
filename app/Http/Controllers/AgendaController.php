<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaFormRequest;
use App\Http\Requests\clienteFormRequest;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agenda(AgendaFormRequest $request){
        $agendas= Agenda::create([
        'profissional_id'=> $request ->profissional_id,
        'cliente_id'=> $request ->cliente_id,
        'servico_id'=> $request ->servico_id,
        'data_hora'=> $request ->data_hora,
        'tipo_pagamento'=> $request ->tipo_pagamento,
        'valor'=> $request ->valor,
        ]);

        return response()->json([
            "success" => true,
            "message" => "serviço agendado com sucesso",
            "data" => $agendas
        ], 200);
}

public function retornarTodos(){
    $agendas = Agenda::all();
    return response()->json([
        'status'=> true,
        'data '=> $agendas
    ]);
}

public function excluir($id){
    $agendas = Agenda::find($id);
    if(!isset($agendas)){
        return response()->json([
            "status" => false,
            "message" => "Agendamento não encontrado"
        ]);
    }
    $agendas->delete();

    return response()->json([
        'status' => false,
        'message' => 'Agendamento excluido com sucesso'
    ]);
}

public function atualizar(AgendaFormRequest $request){
    $agendas = Agenda::find($request->id);

    if(!isset($agendas)){
        return response()->json([
            "status" => false,
            "message" => "agendamento não encontrado"
        ]);
    }

    if(isset($request->profissional_id)){
        $agendas->profissional_id = $request->profissional_id;
    }
    if(isset($request->cliente_id)){
        $agendas->cliente_id = $request->cliente_id;
    }
    if(isset($request->servico_id)){
        $agendas->servico_id = $request->servico_id;
    }
    if(isset($request->data_hora)){
        $agendas->data_hora = $request->data_hora;
    }
    if(isset($request->tipo_pagamento)){
        $agendas->tipo_pagamento = $request->tipo_pagamento;
    }
    if(isset($request->valor)){
        $agendas->valor = $request->valor;
    }
    $agendas->update();
    
        return response()->json([
            "status" => false,
            "message" => "Cliente atualizado"
        ]);
}
}
