<nav>
    <div class="nav-wrapper">
        <form method="POST" action="/home/buscar">
            <div class="input-field">
                <input id="search" name="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>

<br>

<?php
if (!empty($data['mensagem'])) {
    foreach ($data['mensagem'] as $m) {
        echo $m . "<br>";
    }
}
?>

<?php
$pagination = new App\Pagination($data['registros'], isset($_GET['page']) ? $_GET['page'] : 1, 3);
?>

<?php
if (empty($pagination->resultado())) {
    echo "Nenhum registro encontrado!";
}
?>

<div class="row container">
    <?php foreach ($pagination->resultado() as $note) : ?>

        <h1><a href="/notes/ver/<?php echo $note['id']; ?>"><?php echo $note['titulo']; ?></a></h1>
        <p><?php echo $note['texto']; ?></p> <br>

        <?php if (isset($_SESSION['logado'])) { ?>
            <a class="waves-effect waves-light btn orange" href="/notes/excluir/<?php echo $note['id']; ?>">
                Excluir
            </a> |
            <a class="waves-effect waves-light btn orange" href="/notes/editar/<?php echo $note['id']; ?>">
                Editar
            </a><br>
        <?php } ?>

    <?php endforeach; ?>

    <?php
    $pagination->navigator();
    ?>
</div>