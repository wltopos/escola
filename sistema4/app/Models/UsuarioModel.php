<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'administrativo_usuarios';
    protected $primaryKey       = 'id_administrativo_usuario';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome_administrativo_usuario',
        'email_administrativo_usuario',
        'password',
        'reset_hash_administrativo_usuario',
        'reset_expira_em_administrativo_usuario',
        'imagem_administrativo_usuario'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'criado_em_administrativo_usuario';
    protected $updatedField  = 'atualizado_em_administrativo_usuario';
    protected $deletedField  = 'deletado_em_administrativo_usuario';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
