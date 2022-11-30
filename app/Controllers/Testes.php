<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testes extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Como fazer um sistema de entrega de comida com CodeIgniter 4',
            'subtitulo' => 'muito legal conhecer essa nova versão do CodeIgniter 4',

        ];


        return view('Testes/index', $data);
    }

    public function novo (){
        echo 'Esse é mais um método do controller Testes';
    }
}
