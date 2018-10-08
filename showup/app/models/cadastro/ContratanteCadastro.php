<?php

namespace App\models\cadastro;


use App\models\base\Contratante;
use App\models\repositorio\repositorioDB\RepositorioContratanteDB;

class ContratanteCadastro
{
    private $repositorioContratante;

    public function _construct(RepositorioContratanteDB $repositorio){
        $this->repositorioContratante=$repositorio;
    }

    public function cadastrar(Contratante $contratante){
        if(!($this->repositorioContratante->existeContratante($contratante->cpf))){
            $this->repositorioContratante->cadastrar($contratante);
        }
    }
    public function ler($cpf){
        return $this->repositorioContratante->ler($cpf);
    }
    public function update(Contratante $contratante){
        $this->repositorioContratante->update($contratante);
    }
    public function deletar($cpf){
        $this->repositorioContratante->deletar($cpf);
    }
}