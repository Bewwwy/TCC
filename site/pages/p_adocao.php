<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/p_adocao.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Pedidos de adoção</title>
</head>
<body>
    <div class="container">
        <a id="vol" href="./adm.html"><img src="../images/back.png" alt="voltar símbolo"><p>Voltar</p></a>
        <div class="pedidos">
            <h1>Pedidos de adoção</h1>
            <?php
                $query = "SELECT * FROM tb_f_adocao ORDER BY ID_form;";

                $stmt = $pdo->prepare($query);
                $stmt->execute();
                
                $result = $stmt->fetchAll();
                
                
                foreach($result as $row) {
                    echo "<div class='infos'>";
                    echo "<div class='row'><h3 id='pet'>ID pet: ". $row['ID_pet'] . "</h3>";
                    echo "<h3>ID formulário: ". $row['ID_form'] . "</h3></div>";
                    echo "<div class='a'><h4>Nome completo:</h4><p id='resp'>". $row['nome_completo'] . "</p></div>";
                    echo "<div class='a'><h4>Data de nascimento:</h4><p id='resp'>". $row['idade'] . "</p></div>";
                    echo "<div class='a'><h4>Email:</h4><p id='resp'>". $row['email'] . "</p></div>";
                    echo "<div class='a'><h4>Número de telefone:</h4><p id='resp'>". $row['numero'] . "</p></div>";
                    echo "<div class='a'><h4>CPF:</h4><p id='resp'>". $row['CPF'] . "</p></div>";
                    echo "<div class='a'><h4>CEP:</h4><p id='resp'>". $row['CEP'] . "</p></div>";
                    echo "<a id='exc' href='../banco/adocao/delete/deletehandler.php?id=". $row['ID_form'] ."'>Excluir</a>";
                    echo"</div>"; 
                }
            ?>
        </div>
    </div>
</body>
</html>