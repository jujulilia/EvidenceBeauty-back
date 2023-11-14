<?php

namespace Database\Seeders;

use App\Models\Profissional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class profissionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profissional::create([
            'nome' => 'Teste',
            'celular' => '1234567891',
            'email' => 'teste@gmail.com.br',
            'cpf' => '12345678901',
            'dataDeNascimento'=> '1111-12-11',
            'cidade'=> 'cidadeTeste',
            'estado'=> 'sp',
            'pais'=> 'brasil',
            'rua'=> 'teste',
            'numero'=> '1222',
            'bairro'=> 'teste',
            'cep'=> '12345678',
            'complemento'=> 'teste',
            'senha' => Hash::make('123456'),
            'salario' => '12.00'
        ]);
    }
}
