<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos de adoção</title>
</head>
<body>
    <h1>Pedidos de adoção</h1>
    <a href="./adm.html">Voltar</a>

    <table class="tableAnimal">
        <thead>
            <tr>
                <th>ID pet</th>
                <th>ID formulário</th>
                <th>Nome completo</th>
                <th>Data de nascimento</th>
                <th>Email</th>
                <th>Número de telefone</th>
                <th>CPF</th>
                <th>CEP</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $query = "SELECT * FROM tb_f_adocao ORDER BY ID_form;";

                $stmt = $pdo->prepare($query);
                $stmt->execute();
                
                $result = $stmt->fetchAll();
                
                
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>". $row['ID_pet'] . "</td>";
                    echo "<td>". $row['ID_form'] . "</td>";
                    echo "<td>". $row['nome_completo'] . "</td>";
                    echo "<td>". $row['idade'] . "</td>";
                    echo "<td>". $row['email'] . "</td>";
                    echo "<td>". $row['numero'] . "</td>";
                    echo "<td>". $row['CPF'] . "</td>";
                    echo "<td>". $row['CEP'] . "</td>";
                    echo "<td><a href='../banco/adocao/delete/deletehandler.php?id=". $row['ID_form'] ."'>Excluir</a></td>";
                    echo"</tr>"; 
                }
            ?>
        </tbody>

    </table>
</body>
</html>