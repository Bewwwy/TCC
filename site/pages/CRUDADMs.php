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
    <table class="tableADM">
    <a href="./c_adm.php">Cadastrar novo ADM</a>
    <a href="login.php"><button>Voltar para a página de login</button></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th id="edit">Editar</th>
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
                    echo "<td><button class='btnexc'>Excluir</button></td>";
                    echo"</tr>"; 
                }
            ?>
        </tbody>

    </table>
    <a id="novo" href="./c_adm.php">Cadastrar novo ADM</a>
    <a id="voltar" href="../index.html">Voltar</a>
    </div>
    
</body>
</html>