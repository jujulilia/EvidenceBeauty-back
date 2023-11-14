<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cliente::create([
            'nome' => 'Teste',
            'email' => 'teste@gmail.com.br',
            'cpf' => '12345678901',
            'celular' => '1234567890',
            'dataNascimento'=> '1111-12-11',
            'cidade'=> 'cidadeTeste',
            'estado'=> 'sp',
            'pais'=> 'brasil',
            'rua'=> 'teste',
            'numero'=> '1222',
            'bairro'=> 'teste',
            'cep'=> '12345678',
            'complemento'=> 'teste',
            'senha' => Hash::make('123456'),
        ]);
    }
}
