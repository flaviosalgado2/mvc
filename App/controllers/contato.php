<?php

class Contato
{
    public function email($nome = '', $email = '', $cpf = '')
    {
        echo $nome . '<br>' . $email . '<br>' . $cpf;
    }

    public function telefone()
    {
        echo "73 864646466";
    }

    public function index()
    {
        echo "index do contato";
    }
}
