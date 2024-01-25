<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendaProfissionaiscontroller;
use App\Http\Controllers\clientecontroller;
use App\Http\Controllers\Profissionalcontroller;
use App\Http\Controllers\ServicoController;
use App\Models\servico;
use Database\Seeders\servicoSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Clientes
route::post('clientes', [clientecontroller::class, 'clientes']);
route::post('nome/clientes', [clientecontroller::class, 'pesquisarPorNome']);
route::get('cpf/clientes', [clientecontroller::class, 'pesquisarPorCpf']);
route::get('celular/clientes', [clientecontroller::class, 'pesquisarPorCelular']);
route::get('email/clientes', [clientecontroller::class, 'pesquisarPorEmail']);
route::get('find/clientes/{id}', [clientecontroller::class, 'pesquisarPorId']);
route::delete('delete/clientes/{id}', [clientecontroller::class, 'excluir']);
route::put('update/clientes', [clientecontroller::class, 'update']);
route::get('visualizar/clientes', [clientecontroller::class, 'retornarTodos']);
Route::post('senha/clientes',[clientecontroller::class, 'redefinirSenha']);


//Profissional
route::post('profissional', [Profissionalcontroller::class, 'profissionais']);
route::post('nome/profissional', [Profissionalcontroller::class, 'pesquisarPorNome']);
route::get('cpf/profissional', [Profissionalcontroller::class, 'pesquisarPorCpf']);
route::get('celular/profissional', [Profissionalcontroller::class, 'pesquisarPorCelular']);
route::get('email/profissional', [Profissionalcontroller::class, 'pesquisarPorEmail']);
route::get('find/profissional/{id}', [Profissionalcontroller::class, 'pesquisarPorId']);
route::delete('delete/profissional/{id}', [Profissionalcontroller::class, 'excluir']);
route::put('update/profissional', [Profissionalcontroller::class, 'update']);
route::get('visualizar/profissional', [Profissionalcontroller::class, 'retornarTodos']);
Route::post('senha/profissional',[Profissionalcontroller::class, 'redefinirSenha']);


//Serviços
route::post('servicos', [ServicoController::class, 'servicos']);
route::get('descricao/servicos', [ServicoController::class, 'pesquisarPorDescricao']);
route::post('nome/servicos', [ServicoController::class, 'pesquisarPorNome']);
route::get('find/servicos/{id}', [ServicoController::class, 'pesquisarPorId']);
route::delete('delete/servicos/{id}', [ServicoController::class, 'excluir']);
route::put('update/servicos', [ServicoController::class, 'update']);
route::get('visualizar/servicos', [ServicoController::class, 'retornarTodos']);


//Agendamento Profissionais
route::post('agendamento', [AgendaProfissionaiscontroller::class, 'cadastroAgenda']);
route::post('Profissional/agendamento', [AgendaProfissionaiscontroller::class, 'pesquisarPorProfissional']);
route::post('data/agendamento', [AgendaProfissionaiscontroller::class, 'pesquisarPorData']);
route::delete('delete/agendamento/{id}', [AgendaProfissionaiscontroller::class, 'excluir']);
route::put('update/agendamento', [AgendaProfissionaiscontroller::class, 'update']);
route::get('visualizar/agendamento', [AgendaProfissionaiscontroller::class, 'retornarTodos']);
route::get('find/agendamento/{id}', [AgendaProfissionaiscontroller::class, 'pesquisarPorId']);


//Agenda
route::post('agenda', [AgendaController::class, 'agenda']);
route::delete('delete/agenda/{id}', [AgendaController::class, 'excluir']);
route::put('update/agenda', [AgendaController::class, 'update']);
route::get('visualizar/agenda', [AgendaController::class, 'retornarTodos']);

//Clientes Adm
route::post('adm/clientes', [clientecontroller::class, 'clientes']);
route::post('adm/nome/clientes', [clientecontroller::class, 'pesquisarPorNome']);
route::get('adm/cpf/clientes', [clientecontroller::class, 'pesquisarPorCpf']);
route::get('adm/celular/clientes', [clientecontroller::class, 'pesquisarPorCelular']);
route::get('adm/email/clientes', [clientecontroller::class, 'pesquisarPorEmail']);
route::get('adm/find/clientes/{id}', [clientecontroller::class, 'pesquisarPorId']);
route::delete('adm/delete/clientes/{id}', [clientecontroller::class, 'excluir']);
route::put('adm/update/clientes', [clientecontroller::class, 'update']);
route::get('adm/visualizar/clientes', [clientecontroller::class, 'retornarTodos']);
Route::post('adm/senha/clientes',[clientecontroller::class, 'redefinirSenha']);
