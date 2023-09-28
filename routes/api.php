<?php

use App\Http\Controllers\clientecontroller;
use App\Http\Controllers\Profissionalcontroller;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//serviços
route::post('servicos', [ServicoController::class, 'servicos']);
route::get('descricaoS', [ServicoController::class, 'pesquisarPorDescricao']);
route::get('nomeS', [ServicoController::class, 'pesquisarPorNome']);
route::get('find/{id}', [ServicoController::class, 'pesquisarPorId']);
route::delete('deleteS/{id}', [ServicoController::class, 'excluir']);
route::put('updateS', [ServicoController::class, 'update']);


//clientes

route::post('clientes', [clientecontroller::class, 'clientes']);
route::get('nomeC', [clientecontroller::class, 'pesquisarPorNome']);
route::get('cpfC', [clientecontroller::class, 'pesquisarPorCpf']);
route::get('celularC', [clientecontroller::class, 'pesquisarPorCelular']);
route::get('emailC', [clientecontroller::class, 'pesquisarPorEmail']);
route::delete('deleteC/{id}', [clientecontroller::class, 'excluir']);
route::put('updateC', [clientecontroller::class, 'update']);


//Profissional
route::post('profissional', [Profissionalcontroller::class, 'profissionais']);
route::get('nomeP', [Profissionalcontroller::class, 'pesquisarPorNome']);
route::get('cpfP', [Profissionalcontroller::class, 'pesquisarPorCpf']);
route::get('celularP', [Profissionalcontroller::class, 'pesquisarPorCelular']);
route::get('emailP', [Profissionalcontroller::class, 'pesquisarPorEmail']);
route::delete('deleteP/{id}', [Profissionalcontroller::class, 'excluir']);
route::put('updateP', [Profissionalcontroller::class, 'update']);
