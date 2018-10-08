<?php

namespace App\models\controlador;


use App\models\base\Contratante;
use App\models\cadastro\ContratanteCadastro;
use App\models\repositorio\repositorioDB\RepositorioContratanteDB;

class ContratanteControlador
{
    private $contratanteCadastro;

    public function __construct(RepositorioContratanteDB $rep){
        $this->contratanteCadastro=new ContratanteCadastro($rep);
    }

    public function cadastrar(Contratante $contratante){
       $this->contratanteCadastro->cadastrar($contratante);
    }
    public function ler($cpf){
        return $this->contratanteCadastro->ler($cpf);
    }
    public function update(Contratante $contratante){
        $this->contratanteCadastro->update($contratante);
    }
    public function deletar($cpf){
        $this->contratanteCadastro->deletar($cpf);
    }
}