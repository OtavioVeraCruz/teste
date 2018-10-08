<?php

namespace App\models\repositorio\repositorioDB;


use App\models\base\Artista;
use App\models\repositorio\interfaces\IRepositorioArtista;

class RepositorioArtistaDB implements IRepositorioArtista
{

    public function __construct(){

    }

    public function cadastrar(Artista $artista)
    {
        $artista->save();
    }

    public function existeArtista($cpf)
    {
        return Artista::where('cpf',$cpf)->exists();
    }
}