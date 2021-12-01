<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto MVC</title>
</head>

<body>
    <h1>Meu Bloco de Anotações Online</h1>
    <a href="/">Home</a> | <a href="/notes/criar">Criar Novo Bloco</a> | <a href="/home/login"> Login</a>

    <?php require_once '../App/views/' . $view . '.php'; ?>
</body>

</html>