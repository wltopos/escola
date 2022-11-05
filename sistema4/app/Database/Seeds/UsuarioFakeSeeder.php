<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;

class UsuarioFakeSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();

        $faker = \Faker\Factory::create();

        $usuariosPush = [];

        $criarQuantosUsuarios = 50;

        for ($i = 0; $i < $criarQuantosUsuarios; $i++) {
            array_push($usuariosPush, [
                'nome_administrativo_usuario' => $faker->name(),
                'email_administrativo_usuario ' => $faker->email(),
                'password_hash_administrativo_usuario' => '12345',
                'status_administrativo_usuario' => true

            ]);
        }


        $usuarioModel->skipValidation(true)
            ->protect(false)
            ->insertBatch($usuariosPush);

    echo $criarQuantosUsuarios." usuarios criados com sucesso!";
    }
}
