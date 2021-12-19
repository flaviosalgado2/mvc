<?php if (!empty($data['mensagem'])) {
    foreach ($data['mensagem'] as $m) {
        echo $m . "<br>";
    }
}
?>

<div class="row container">
    <h1>Fazer Login</h1>

    <form action="" method="post">

        <div class="row">
            <div class="input-field col s12">
                <input type="email" id="email" name="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="password" id="password" name="senha" class="validate">
                <label for="password">Senha</label>
            </div>
        </div>

        <button class="waves-effect waves-light btn" name="entrar"> Entrar</button>
    </form>

</div>