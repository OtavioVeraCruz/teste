<?php
/**
 * Created by PhpStorm.
 * User: LINCS
 * Date: 08/10/2018
 * Time: 13:51
 */

namespace App\Http\Controllers;


class ContratanteController extends Controller
{

    public function index(){
        return view('register-contratante');
    }
}