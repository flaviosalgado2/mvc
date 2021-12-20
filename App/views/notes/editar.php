<div class="row container">

    <h1>Edição de Bloco de Anotação</h1>

    <?php
    if (!empty($data['mensagem'])) {
        //print_r($data['mensagem']);
        echo "<script>";
        foreach ($data['mensagem'] as $m) {
            echo $m;
        }
        echo "</script>";
    }
    ?>

    <form action="/notes/editar/<?php echo $data['registros']['id']; ?>" method="post" enctype="multipart/form-data">
        Titulo: <input type="text" name="titulo" value="<?php echo $data['registros']['titulo']; ?>"><br>
        Texto: <textarea name="texto" id="" cols="30" rows="10"><?php echo $data['registros']['texto']; ?></textarea><br>

        <?php
        if (!empty($data['registros']['imagem'])) {
            ?>
            <button name="deletarImagem" class="btn orange">Deletar Imagem</button>
            <button name="atualizar" class="btn">Atualizar</button>
        <?php } else { ?>
            <br>
            Imagem
            <input required type="file" name="foo" value="" />
            <button name="atualizarImagem" class="btn">Atualizar Imagem</button>
        <?php } ?>


    </form>

</div>