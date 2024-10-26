<?php 
require_once '../banco/config_session.php';
require_once '../banco/adm/c_adm_view.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/c_adm.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Cadastrar ADMs</title>
</head>
<body>
    <div class="cad-adm">
        <h1>Cadastrar ADM</h1>
        <form action="../banco/adm/c_admhandler.php" method="post">
        <!-- <label for="nome">Nome</label>
        <input type="text" name="nome" id="" placeholder="Nome">
        <label for="user">Usuário</label>
        <input type="text" name="user" placeholder="Usuário">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Senha"> -->

        <?php 
        input_cadastro();
        ?>
        <button id="btn">Cadastrar</button>
        </form>
        
        <a href="./CRUDADMs.php">Voltar</a>
    </div>
    <?php

    check_erros_cadastro();

    ?>
</body>
</html>