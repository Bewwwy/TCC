<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
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
                $query = "SELECT * FROM tb_adm ORDER BY ID_adm;";

                $stmt = $pdo->prepare($query);
                $stmt->execute();
                
                $result = $stmt->fetchAll();
                
                
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>". $row['ID_adm'] . "</td>";
                    echo "<td>". $row['user'] . "</td>";
                    echo "<td>". $row['nome'] . "</td>";
                    echo "<td><input type='password' value='XXXXXXXXXXXXXXX' disabled='disabled'></td>";
                    echo"</tr>"; 
                }
            ?>
        </tbody>

    </table>
    
</body>
</html>