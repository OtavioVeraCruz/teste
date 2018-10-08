<?php

use App\models\base\Contratante;

interface IRepositorioContratante{
    public function cadastrar(Contratante $contratante );
    public function ler($cpf);
    public function update(Contratante $contratante);
    public function deletar($cpf);
    public function existeContratante($cpf);

}