<h1>Edição de Bloco de Anotação</h1>

<?php
if (!empty($data['mensagem'])) {
    foreach ($data['mensagem'] as $m) {
        echo $m . "<br>";
    }
}
?>

<form action="/notes/editar/<?php echo $data['registros']['id']; ?>" method="post">
    Titulo: <input type="text" name="titulo" value="<?php echo $data['registros']['titulo']; ?>"><br>
    Texto: <textarea name="texto" id="" cols="30" rows="10"><?php echo $data['registros']['texto']; ?></textarea><br>
    <button name="atualizar">Atualizar</button>
</form>