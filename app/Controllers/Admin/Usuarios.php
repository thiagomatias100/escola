<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{
    private $usuarioModel;
    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }
    public function index()
    {
        $data = [
            'titulo' => 'Sistema de Reserva de Laboratórios ufma Campus S.Cernarco',
            'foot' => 'UNIVERSIDADE FEDERAL DO MARANHÃO CAMPUS SÃO BERNARDO',
            'usuario' => $this->usuarioModel->findAll(),
        ];
        return view('/Admin/Usuarios/index', $data);
    }
    public function procurar()
    {
        if(!$this->request->isAJAX()){
            exit("página não encontrada");
        }


        $usuarios = $this->usuarioModel->procurar($this->request->getGet('term'));
        $retorno =[];
        
        foreach ($usuarios as $usuario ):
            $data['id'] = $usuario->id;
            $data['value'] = $usuario->nome;

            $retorno[] = $data;
        endforeach;
       return $this->response->setJSON($retorno);
    }

}
