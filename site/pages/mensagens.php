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
    <h1>Mensagens</h1>
    <div class='msg'>
        <p id="id">ID mensagem</p>
        <p id="nome">Nome</p>
        <p id="email">Email</p>
    </div>
    
    <div class="msg2">
        <p>Mensagem...</p>
    </div>
    
    <?php
        $query = "SELECT * FROM tb_msg ORDER BY ID_msg;";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        
        foreach($result as $row) {
            echo "<div class='msg'>";
            echo "<p>". $row['ID_msg'] . "</p>";
            echo "<h2>". $row['nome_completo'] . "</h2>";
            echo "<h3>". $row['email'] . "</h3>";
            echo "<p>". $row['msg'] . "</p>";
            echo "<td><a href='../banco/adocao/delete/deletehandler.php?id=". $row['ID_msg'] ."'>Excluir</a></td>";
            echo"</div>"; 
        }
    ?>
    <a href="./adm.html">Voltar</a>
    
</body>
</html>