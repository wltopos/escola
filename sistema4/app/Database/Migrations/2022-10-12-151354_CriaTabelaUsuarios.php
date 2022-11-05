<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_administrativo_usuario'    => [
                'type'       => 'int',
                'constraint' => 5,
                'unsigned'   => true,
                'auto_increment' => true
            ],
            'nome_administrativo_usuario'   => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
            ],
            'email_administrativo_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 240
            ],
            'password_hash_administrativo_usuario' => [
                'type'      => 'VARCHAR',
                'constraint' => 240
            ],
            'reset_hash_administrativo_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 80,
                'null'       => true,
                'default'    => null,
            ],
            'reset_expira_em_administrativo_usuario' => [
                'type'       => 'DATETIME',
                'null'       => true,
                'default'    => null,
            ],
            'imagem_administrativo_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 240,
                'null'       => true,
                'default'    => null,
            ],
            'status_administrativo_usuario' => [
                'type'       => 'BOOLEAN',
                'null'       => false,
            ],
            'criado_em_administrativo_usuario' => [
                'type'       => 'DATETIME',
                'null'       => true,
                'default'    => null,
            ],
            'atualizado_em_administrativo_usuario' => [
                'type'       => 'DATETIME',
                'null'       => true,
                'default'    => null,
            ],
            'deletado_em_administrativo_usuario' => [
                'type'       => 'DATETIME',
                'null'       => true,
                'default'    => null,
            ],

        ]);

        $this->forge->addKey('id_administrativo_usuario', true);
        $this->forge->addUniqueKey('email_administrativo_usuario');
        $this->forge->createTable('administrativo_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('administrativo_administrativo_usuarios');
    }
}
