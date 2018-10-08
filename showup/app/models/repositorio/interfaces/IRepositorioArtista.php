<?php

namespace App\models\repositorio\interfaces;

use App\models\base\Artista;

 interface IRepositorioArtista{

    public function cadastrar(Artista $artista);
    public function existeArtista($cpf);
}