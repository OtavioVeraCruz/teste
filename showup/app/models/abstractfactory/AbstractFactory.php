<?php
/**
 * Created by PhpStorm.
 * User: LINCS
 * Date: 08/10/2018
 * Time: 14:06
 */

namespace App\models\abstractfactory;


interface AbstractFactory
{
    public function createArtistaDB();
    public function createContratanteDB();
}