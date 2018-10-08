<?php

namespace App\models\fachada;


use App\models\base\Artista;
use App\models\base\Contratante;
use App\models\controlador\ArtistaControlador;
use App\models\controlador\ContratanteControlador;
use App\models\repositorio\repositorioDB\RepositorioArtistaDB;
use App\models\repositorio\repositorioDB\RepositorioContratanteDB;

class Fachada
{

    protected static $instance;
    private $artistaControlador;
    private $contratanteControlador;

    public static function getInstance(){
        if (is_null(static::$instance)){
            static::$instance=new static();
        }
        return static::$instance;
    }

    function __construct(){
            $this->artistaControlador=new ArtistaControlador(new RepositorioArtistaDB());
            $this->contratanteControlador=new ContratanteControlador(new RepositorioContratanteDB());
    }

    public function cadastrarArtista(Artista $artista)
    {
    $this->artistaControlador->cadastrar($artista);
    }

    public function cadastrarContratante(Contratante $contratante)
    {
        $this->contratanteControlador->cadastrar($contratante);
    }

    public function recuperarContratante($cpf) {
     return $this->contratanteControlador->ler($cpf);
    }

    public function updateContratante(Contratante $contratante) {
    $this->contratanteControlador->update(contratante);
    }

    public function deletarContratante($cpf) {
    $this->contratanteControlador->deletar($cpf);
    }
}