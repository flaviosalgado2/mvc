<?php if (!empty($data['mensagem'])) {
    foreach ($data['mensagem'] as $m) {
        echo $m . "<br>";
    }
}
?>

<h1>Fazer Login</h1>

<form action="" method="post">
    E-mail: <input type="text" name="email" id=""><br><br>
    senha: <input type="text" name="senha" id="">
    <button name="entrar"> Entrar</button>
</form>