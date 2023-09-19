<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//serviços
route::post('servicos', [ServicoController::class, 'servicos']);
route::get('descricao', [ServicoController::class, 'pesquisarPorDescricao']);
route::get('nome', [ServicoController::class, 'pesquisarPorNome']);
route::get('find/{id}', [ServicoController::class, 'pesquisarPorId']);
route::delete('delete/{id}', [ServicoController::class, 'excluir']);
route::put('update', [ServicoController::class, 'update']);

//clientes
route::post('cliente', [ClienteController::class, 'clientes']);
route::get('nome', [ClienteController::class, 'pesquisarPorNome']);
route::get('cpf', [ClienteController::class, 'pesquisarPorCpf']);
route::get('celular', [ClienteController::class, 'pesquisarPorCelular']);
route::get('email', [ClienteController::class, 'pesquisarPorEmail']);
route::delete('delete/{id}', [ClienteController::class, 'excluir']);
route::put('update', [ClienteController::class, 'update']);



