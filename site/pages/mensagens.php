<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mens.css">
    <title>Mensagens</title>
</head>
<body>
    <div class="container">
        <h1>Mensagens</h1><a href="./adm.html" id='vol'>Voltar</a>
        
        <?php
            $query = "SELECT * FROM tb_msg ORDER BY ID_msg;";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            
            $result = $stmt->fetchAll();
            
            
            foreach($result as $row) {
                echo "<div class='msg'><div class='row'>";
                echo "<p id='id'>ID: ". $row['ID_msg'] . "</p>";
                echo "<h2 id='nome'>Nome: ". $row['nome_completo'] . "</h2>";
                echo "<h3 id='email'>Email: ". $row['email'] . "</h3></div>";
                echo "<p id='msg'>". $row['msg'] . "</p>";
                echo "<a href='../banco/msg/delete/deletehandler.php?id=". $row['ID_msg'] ."' id='exc' >Excluir</a>";
                echo"</div>"; 
            }
        ?>
        
    </div>
</body>
</html>