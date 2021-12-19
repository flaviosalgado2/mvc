<h1>Criar Novo Bloco de Anotação</h1>

<?php
if (!empty($data['mensagem'])) {
    foreach ($data['mensagem'] as $m) {
        echo $m . "<br>";
    }
}
?>

<form action="/notes/criar" method="post" enctype="multipart/form-data">
    Titulo: <input type="text" name="titulo"><br>
    Texto: <textarea name="texto" id="" cols="30" rows="10"></textarea><br>
    Imagem: <br> <input type="file" name="foo" id="">
    <button name="cadastrar">Cadastrar</button>
</form>