<?php

namespace App\models\cadastro;


use App\models\base\Artista;
use App\models\repositorio\repositorioDB\RepositorioArtistaDB;

class ArtistaCadastro
{

    private $repositorioArtista;

    public function __construct(RepositorioArtistaDB $repositorioArtista){
        $this->repositorioArtista=$repositorioArtista;
    }

    public function cadastrar(Artista $artista){
        if (!($this->repositorioArtista->existeArtista($artista->cpf))){
            $this->repositorioArtista->cadastrar($artista);
        }
    }
}