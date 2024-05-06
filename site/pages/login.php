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
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="../banco/loginhandler.php" method="post">
        <label for="user">Usuário</label>
        <input type="text" name="user" placeholder="Usuário">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Senha">
        <button>Entrar</button>
    </form>

    <?php
    check_erros_login();

    ?>
</body>
</html>