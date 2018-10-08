<?php

namespace App\models\base;


use App\User;

/**
 * @property mixed cpf
 */
class Artista extends User{

    protected $fillable=['cpf'];


}