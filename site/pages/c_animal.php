<?php 
require_once '../banco/config_session.php';
require_once '../banco/c_animal_view.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal</title>
</head>
<body>
    <h1>Cadastrar Animal</h1>
    <form action="../banco/c_animalhandler.php" method="post" enctype="multipart/form-data">
        <label for="nome_pet">Nome do animal</label>
        <input type="text" name="nome_pet" placeholder="Nome do animal">

        <label for="foto">Foto</label>
        <input type="file" name="foto">
        
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Senha">

        <?php 
        // input_cadastro();
        ?>
        <button type="submit">Cadastrar</button>
    </form>
    <?php

    // check_erros_cadastro();

    ?>
</body>
</html>