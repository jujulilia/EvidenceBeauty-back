<?php

namespace Database\Seeders;

use App\Models\servico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class servicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        servico::create([
            'nome' => 'Teste',
            'descricao' => 'teste',
            'duracao' => '12',
            'preco' => '12.00'
        ]);
    }
}
