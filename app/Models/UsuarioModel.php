<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
   // protected $DBGroup              = 'default';
    protected $table                = 'usuarios';
    //protected $primaryKey           = 'id';
    //protected $useAutoIncrement     = true;
    //protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = true;
    //protected $protectFields        = true;
    protected $allowedFields        = ['nome','email','matricula','telefone'];

    // Dates
    protected $useTimestamps        = true;
    //protected $dateFormat           = 'datetime';
    protected $createdField         = 'criado_em';
    protected $updatedField         = 'atualizado_em';
    protected $deletedField         = 'deletado_em';

    // Validation
    //protected $validationRules      = [];
    //protected $validationMessages   = [];
    //protected $skipValidation       = false;
    //protected $cleanValidationRules = true;

    // Callbacks
    //protected $allowCallbacks       = true;
    //protected $beforeInsert         = [];
    //protected $afterInsert          = [];
    //protected $beforeUpdate         = [];
    //protected $afterUpdate          = [];
    //protected $beforeFind           = [];
    //protected $afterFind            = [];
    //protected $beforeDelete         = [];
    //protected $afterDelete          = [];

    public function procurar($term){
        if($term === null){
            return [];
        }

        return $this->select('id, nome,')
                    ->like('nome',$term)
                    ->get()
                    ->getResult();
    }

}
