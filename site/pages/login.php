<?php 
require_once '../banco/config_session.php';
require_once '../banco/l_view.php';
require_once '../banco/create_default.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="page">
        <h1>Fazer Login</h1>
        <form class="forms" action="../banco/loginhandler.php" method="post">
            <label for="user">Usuário</label>
            <input type="text" name="user" placeholder="Usuário">
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha">
            <button id="btnadm">Entrar</button>
        </form>
    </div>

    <?php
    check_erros_login();

    ?>
</body>
</html>