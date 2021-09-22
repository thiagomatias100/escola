<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeder extends Seeder
{

    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel;

        $usuario = [
            'nome' => "Matias da silva",
            'email' => 'matias@gmail.com',
            'maticula' => '987654',
            'telefone' => '98-553574569',
        ];
        $usuarioModel->insert($usuario);
    }
}
