<?php

use App\Http\Controllers\clientecontroller;
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

route::post('clientes', [clientecontroller::class, 'clientes']);
route::get('nome', [clientecontroller::class, 'pesquisarPorNome']);
route::get('cpf', [clientecontroller::class, 'pesquisarPorCpf']);
route::get('celular', [clientecontroller::class, 'pesquisarPorCelular']);
route::get('email', [clientecontroller::class, 'pesquisarPorEmail']);
route::delete('delete/{id}', [clientecontroller::class, 'excluir']);
route::put('update', [clientecontroller::class, 'update']);



