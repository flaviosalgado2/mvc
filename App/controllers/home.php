<?php

use App\Core\Controller;
use App\Auth;

class Home extends Controller
{
    public function index($nome, $email)
    {
        //se não existe nessa classe pega na classe herdada - metodo model
        $note = $this->model('Note');
        $dados = $note->getAll();

        $this->view('home/index', $dados = ['registros' => $dados]);
    }

    public function login()
    {
        $mensagem = array();

        if (isset($_POST['entrar'])) {
            //echo password_hash('12345', PASSWORD_DEFAULT);
            if ((empty($_POST['email'])) or (empty($_POST['senha']))) {
                $mensagem[] = "O campo de e-mail e senha são obrigatórios";
            } else {
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $mensagem[] = Auth::login($email, $senha);
            }
        }

        $this->view('home/login', $dados = ['mensagem' => $mensagem]);
    }
}
