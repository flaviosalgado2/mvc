<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto MVC</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <nav class="blue">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">MVC PHP</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/"> Bloco de Anotações</a> </li>
                <?php if (isset($_SESSION['logado'])) { ?>
                    <li><a href="/notes/criar">Criar Novo Bloco</a></li>
                    <li><a href="/users/cadastrar">Criar Usuários</a></li>
                <?php } ?>

                <?php if (!isset($_SESSION['logado'])) { ?>
                    <li><a href="/home/login"> Login</a></li>
                <?php } else { ?>
                    Olá <?php echo $_SESSION['userNome']; ?>
                    <li><a href="/home/logout"> Logout</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <?php require_once '../App/views/' . $view . '.php'; ?>

    <script>
        M.AutoInit();
    </script>

</body>

</html>