<?php
if (!empty($data['mensagem'])) {
    foreach ($data['mensagem'] as $m) {
        echo $m . "<br>";
    }
}
?>

<?php foreach ($data['registros'] as $note) : ?>

    <h1><a href="/notes/ver/<?php echo $note['id']; ?>"><?php echo $note['titulo']; ?></a></h1>
    <p><?php echo $note['texto']; ?></p> <br>
    <a href="/notes/excluir/<?php echo $note['id']; ?>">
        Excluir
    </a> |
    <a href="/notes/editar/<?php echo $note['id']; ?>">
        Editar
    </a><br>

<?php endforeach; ?>