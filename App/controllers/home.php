<?php

use App\Core\Controller;

class Home extends Controller
{
    public function index($nome, $email)
    {
        //se não existe nessa classe pega na classe herdada - metodo model
        $user = $this->model('User');
        $user->nome = $nome;
        $user->email = $email;

        echo $user->nome . "<br>" . $user->email;
    }
}
