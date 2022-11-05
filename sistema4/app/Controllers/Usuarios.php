<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{

    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    public function index()
    {
       
        $data = [
            'titulo' => 'Listando os usuários do sistema',
        ];

        return view('Usuarios/index', $data);

    }

    public function recuperaUsuarios()
    {
        if(!$this->request->isAJAX())
        {
            return redirect()->back();
        }

        $atributos = [
            'id_administrativo_usuario',
            'nome_administrativo_usuario',
            'email_administrativo_usuario',
            'status_administrativo_usuario',
            'imagem_administrativo_usuario'
        ];
        
        $usuarios = $this->usuarioModel->select($atributos)
                        ->findAll();

            
        $data = [];

        foreach($usuarios as $usuario){
            $data[] = [
                'imagem_administrativo_usuario' => $usuario['imagem_administrativo_usuario'],
                'nome_administrativo_usuario' => esc($usuario['nome_administrativo_usuario']),
                'email_administrativo_usuario' => esc($usuario['email_administrativo_usuario']),
                'status_administrativo_usuario' => ($usuario['status_administrativo_usuario'] == true?'Ativo':'<span class="text-waning">Inativo</span>'),
            ];
        }

        $retorno = ['data' => $data];

        return $this->response->setJSON($retorno);
        
    }
}
