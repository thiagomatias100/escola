<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
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
        echo "<pre>";
        print_r($this->request->getGet());
        exit;
    }
}
