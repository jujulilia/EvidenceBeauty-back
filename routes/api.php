<?php

use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::post('servicos', [ServicoController::class, 'servicos']);
route::post('descricao', [ServicoController::class, 'pesquisarPorDescricao']);
route::post('nome', [ServicoController::class, 'pesquisarPorNome']);
route::get('find/{id}', [ServicoController::class, 'pesquisarPorId']);
route::delete('delete/{id}', [ServicoController::class, 'excluir']);
route::put('update', [ServicoController::class, 'update']);

