<?php

namespace App\models\repositorio\repositorioDB;


use App\models\base\Contratante;
use IRepositorioContratante;

class RepositorioContratanteDB implements IRepositorioContratante
{

    public function cadastrar(Contratante $contratante)
    {
        $contratante->save();
    }

    public function ler($cpf)
    {
        return Contratante::where('cpf',$cpf)->get();
    }

    public function update(Contratante $contratante)
    {
        $contratante->save();
    }

    public function deletar($cpf)
    {
        Contratante::where('cpf',$cpf)->delete();
    }

    public function existeContratante($cpf)
    {
        return Contratante::where('cpf',$cpf)->exists();
    }
}