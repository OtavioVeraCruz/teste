<?php

namespace App\models\abstractfactory;


use App\models\repositorio\repositorioDB\RepositorioArtistaDB;
use App\models\repositorio\repositorioDB\RepositorioContratanteDB;

class RepositorioFactory implements AbstractFactory
{

    public function createArtistaDB(){
        return new RepositorioArtistaDB();
    }
    public function createContratanteDB(){
        return new RepositorioContratanteDB();
    }
}