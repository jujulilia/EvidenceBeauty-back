<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdmFormRequest;
use App\Http\Requests\clienteFormRequestUpdate;
use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class controller extends Controller
    {
    
        public function clientes(AdmFormRequest $request){
            $Adm= adm::create([
                'nome'=> $request ->nome,
                'celular'=> $request ->celular,
                'email'=> $request ->email,
                'cpf'=> $request ->cpf,
                'dataNascimento'=> $request ->dataNascimento,
                'cidade'=> $request ->cidade,
                'estado'=> $request ->estado,
                'pais'=> $request ->pais,
                'rua'=> $request ->rua,
                'numero'=> $request ->numero,
                'bairro'=> $request ->bairro,
                'cep'=> $request ->cep,
                'complemento'=> $request ->complemento,
                'senha'=> Hash::make($request->senha),
            ]);
    
            return response()->json([
                "success" => true,
                "message" => "Adm cadastrado com sucesso",
                "data" => $Adm
            ], 200);
    }
    public function retornarTodos(){
        $Adm = adm::all();
        return response()->json([
            'status'=> true,
            'data'=> $Adm
        ]);
    }
    public function redefinirSenha(Request $request){
        $Adm = adm::where('email', $request->email)->first();
        if (!isset($Adm)){
            return response()->json([
                'status' => false,
                'message' => "Adm não encontrado"
            ]);
        }

        $Adm->senha = Hash::make($Adm->cpf);
        $Adm->update();    

        return response()->json([
            'status' => false,
            'message' => "Sua senha foi atualizada"
        ]);
    }
    public function pesquisarPorId($id){
        $Adm = adm::find($id);
        if($Adm == null){
            return response()->json([
                'status'=> false,
                'message' => "Serviço não encontrado"
            ]);     
        }
        return response()->json([
            'status'=> true,
            'data'=> $Adm
        ]);
    }

    public function pesquisarPorNome(Request $request){
        $Adm =  adm::where('nome', 'like', '%'. $request->nome . '%')->get();
        if(count($Adm) > 0){
        return response()->json([
            'status'=> true,
            'data'=> $Adm
        ]);
    }
    return response()->json([
        'status' => false,
        'message' => 'não há resultados para pesquisa.'
    ]);
    }
    
    public function pesquisarPorCpf(Request $request){
        $Adm =  adm::where('cpf', 'like', '%'. $request->cpf . '%')->get();
        if(count($Adm) > 0){
        return response()->json([
            'status'=> true,
            'data'=> $Adm 
        ]);
    }
    return response()->json([
        'status' => false,
        'message' => 'não há resultados para pesquisa.'
    ]);
    }
    public function pesquisarPorCelular(Request $request){
        $Adm =  adm::where('celular', 'like', '%'. $request->celular . '%')->get();
        if(count($Adm) > 0){
        return response()->json([
            'status'=> true,
            'data'=>$Adm
        ]);
    }
    return response()->json([
        'status' => false,
        'message' => 'não há resultados para pesquisa.'
    ]);
    }
    public function pesquisarPorEmail(Request $request){
        $Adm =  adm::where('email', 'like', '%'. $request->email . '%')->get();
        if(count($Adm) > 0){
        return response()->json([
            'status'=> true,
            'data'=> $Adm
        ]);
    }
    return response()->json([
        'status' => false,
        'message' => 'não há resultados para pesquisa.'
    ]);
    }
    
    public function excluir($id){
        $Adm = adm::find($id);
        if(!isset($Adm)){
            return response()->json([
                "status" => false,
                "message" => "Adm não encontrado"
            ]);
        }
        $Adm->delete();
    
        return response()->json([
            'status' => false,
            'message' => 'Adm excluido com sucesso'
        ]);
    }
    
    public function update(admFormRequestUpdate $request){
        $Adm = adm::find($request->id);
    
        if(!isset($Adm)){
            return response()->json([
                "status" => false,
                "message" => "Adm não encontrado"
            ]);
        }
    
        if(isset($request->nome)){
            $Adm->nome = $request->nome;
        }
        if(isset($request->celular)){
            $Adm->celular = $request->celular;
        }
        if(isset($request->email)){
            $Adm->email = $request->email;
        }
        if(isset($request->cpf)){
            $Adm->cpf= $request->cpf;
        }
        if(isset($request->dataNascimento)){
            $Adm->dataNascimento = $request->dataNascimento;
        }
        if(isset($request->cidade)){
            $Adm->cidade = $request->cidade;
        }
        if(isset($request->estado)){
            $Adm->estado = $request->estado;
        }
        if(isset($request->pais)){
            $Adm->pais = $request->pais;
        }
        if(isset($request->rua)){
            $Adm->rua = $request->rua;
        }
        if(isset($request->numero)){
            $Adm->numero = $request->numero;
        }
        if(isset($request->bairro)){
            $Adm->bairro = $request->bairro;
        }
        if(isset($request->cep)){
            $Adm->cep = $request->cep;
        }
        if(isset($request->complemento)){
            $Adm->complemento = $request->complemento;
        }
        if(isset($request->senha)){
            $Adm->senha = $request->senha;
        }
    
        $Adm->update();
    
        return response()->json([
            "status" => false,
            "message" => "Adm atualizado"
        ]);
    }
    }
