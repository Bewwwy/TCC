<?php 
require_once '../../config_session.php';
require_once '../../conexao.php';
require_once 'update_view.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/c_adm.css">
    <link rel="icon" type="image/x-icon" href="../../../images/favicon.ico">
    <title>Editar ADM</title>
</head>
<body>

    <div class="cad-adm">
        <h1>Editar ADM</h1>

        
        <form action="updatehandler.php" method="post">
            <?php
            $query = "SELECT * FROM tb_adm WHERE ID_adm= :id;";
            
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":id", $_GET['id']);
            $stmt->execute();
            
            $result = $stmt->fetchAll();
            
            
            
            // echo "<form action='?update=salvar' method='POST'>";
            
            foreach($result as $row) {
                echo "<input type='hidden' name='ID_adm' value='". $row['ID_adm'] ."'>";
                echo "<label for 'nome'>Nome</label>";
                echo "<input type='text' name='nome' placeholder='Novo nome' value='". $row['nome']."' maxlength='50'>";
                echo "<label for 'user'>Usuário</label>";
                echo "<input type='text' name='user' value='". $row['user']."' disabled>";
                echo "<label for 'nova_senha'>Nova senha</label>";
                echo "<input type='hidden' name='user' value='". $row['user']."' maxlength='15'>";
                echo "<input type='password' name='senha' placeholder='senha' required>";
                echo "<button type='submit' id='btn' name='edit'>Editar</button>";
            }
            ?>
            <a href="../../../pages/CRUDADMs.php">Voltar à página de ADMs</a>
        </form>
    </div>

    <?php

    check_erros_update();

    ?>
</body>
</html>