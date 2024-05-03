<?php 
require_once '../banco/c_adm_view.php';
require_once '../banco/config_session.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar ADMs</title>
</head>
<body>
    <h1>Cadastrar ADM</h1>
    <form action="../banco/c_admhandler.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="" placeholder="Nome">
        <label for="user">Usuário</label>
        <input type="text" name="user" placeholder="Usuário">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Senha">
        <button>Cadastrar</button>
    </form>
    <?php

    check_erros_cadastro();

    ?>
</body>
</html>