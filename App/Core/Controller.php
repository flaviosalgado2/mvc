<?php

namespace App\Core;

class Controller
{
    public function model($model)
    {
        //(../) - volta um nivel de diretorio
        require_once '../App/models/' . $model . '.php';

        return new $model;
    }
}
