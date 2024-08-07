<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crudAdm.css">
    <title>CRUD ADMs</title>
</head>
<body>
    <div class="adm">
    <h1>Gerenciar ADMs</h1>
    <h2>Lista de ADMs</h2>
    <a id="novo" href="./c_adm.php">Cadastrar novo ADM</a>
    <a id="voltar" href="adm.html">Voltar</a>
    <table class="tableADM">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM tb_adm ORDER BY ID_adm;";

                $stmt = $pdo->prepare($query);
                $stmt->execute();
                
                $result = $stmt->fetchAll();
                
                
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>". $row['ID_adm'] . "</td>";
                    echo "<td>". $row['nome'] . "</td>";
                    echo "<td>". $row['user'] . "</td>";
                    echo "<td><p>****************</p></td>";
                    echo "<td><a href='../banco/adm/update/update.php?id=". $row['ID_adm'] ."'>Editar</a></td>";
                    echo "<td><a href='../banco/adm/delete/deletehandler.php?id=". $row['ID_adm'] ."'>Excluir</a></td>";
                    echo"</tr>"; 
                }
            ?>
        </tbody>

    </table>
    </div>


    
</body>
</html>