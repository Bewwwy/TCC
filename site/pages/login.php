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
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h1>Fazer Login</h1>
        <form action="../banco/loginhandler.php" method="post">
            <div class="row">
                <label for="user">Usuário</label>
                <input type="text" name="user" placeholder="Usuário">
            </div>
            <div class="row">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Senha">
            </div>
            
            <button id="btnadm">Entrar</button>
            <a href="../index.php">Voltar para a Home</a>
        </form>
    </div>
    <?php
    check_erros_login();

    ?>
</body>
</html>