<?php

use \App\Core\Controller;

class Notes extends Controller
{
    public function ver($id = '')
    {
        $note = $this->model('Note');
        $dados = $note->findId($id);

        $this->view('notes/ver', $dados);
    }

    public function criar()
    {

        $mensagem = array();

        if (isset($_POST['cadastrar'])) {

            if (empty($_POST['titulo'])) {
                $mensagem[] = "O campo titulo não pode ser em branco";
            } elseif (empty($_POST['texto'])) {
                $mensagem[] = "O campo texto não está preenchido";
            } else {
                $note = $this->model('Note');
                $note->titulo = $_POST['titulo'];
                $note->texto = $_POST['texto'];

                //                var_dump($_POST);
                //              die;

                $mensagem[] = $note->save();
            }
        }

        $this->view('notes/criar', $dados = ['mensagem' => $mensagem]);
    }

    public function excluir($id = '')
    {
        $mensagem = array();

        $note = $this->model('Note');

        $mensagem[] = $note->delete($id);

        $dados = $note->getAll();

        $this->view('home/index', $dados = ['registros' => $dados, 'mensagem' => $mensagem]);
    }

    public function editar($id)
    {

        $mensagem = array();
        $note = $this->model('Note');

        if (isset($_POST['atualizar'])) {

            if (empty($_POST['titulo'])) {
                $mensagem[] = "O campo titulo não pode ser em branco";
            } elseif (empty($_POST['texto'])) {
                $mensagem[] = "O campo texto não está preenchido";
            } else {

                $note->titulo = $_POST['titulo'];
                $note->texto = $_POST['texto'];

                //                var_dump($_POST);
                //              die;

                $mensagem[] = $note->update($id);
            }
        }

        $dados = $note->findId($id);

        $this->view('notes/editar', $dados = ['registros' => $dados, 'mensagem' => $mensagem]);
    }
}
