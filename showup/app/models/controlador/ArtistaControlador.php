<?php

namespace App\models\controlador;


use App\models\base\Artista;
use App\models\cadastro\ArtistaCadastro;
use App\models\repositorio\repositorioDB\RepositorioArtistaDB;

class ArtistaControlador
{

    private $artistaCadastro;

    public function __construct(RepositorioArtistaDB $repositorioArtista){
        $this->artistaCadastro=new ArtistaCadastro($repositorioArtista);
    }

    public function cadastrar(Artista $artista){
        $this->artistaCadastro->cadastrar($artista);
    }
}