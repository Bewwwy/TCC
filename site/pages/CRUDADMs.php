<?php
require_once '../banco/config_session.php';
require_once '../banco/crudadm_model.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD ADMs</title>
</head>
<body>
    <h1>Gerenciar ADMs</h1>
    <h2>Lista de ADMs</h2>
    <a href="./c_adm.php">Cadastrar novo ADM</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>User</th>
                <th>Senha</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                display_adms();
            ?>
        </tbody>

    </table>
    
</body>
</html>