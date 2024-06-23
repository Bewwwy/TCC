<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crudA.css">
    <title>CRUD Animais</title>
</head>
<body>
    <div class="wawa">
<h1>Gerenciar Animais</h1>
    <h2>Lista de Animais</h2>
    <table class="table1">
        <thead>
            <tr>
                <th>ID_pet</th>
                <th>Nome do pet</th>
                <th>Foto</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Descrição</th>
                <th>Ações</th>      
            </tr>
        </thead>
        <tbody>
        <?php
                $query = "SELECT * FROM tb_animal    ORDER BY ID_pet;";

                $stmt = $pdo->prepare($query);
                $stmt->execute();
                
                $result = $stmt->fetchAll();
                
                
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>". $row['ID_pet'] . "</td>";
                    echo "<td>". $row['nome_pet'] . "</td>"; ?>
                    <td><img src='../uploads/<?php echo $row['foto']?>'></td><?php
                    echo "<td>". $row['idade'] . "</td>";
                    echo "<td>". $row['sexo'] . "</td>";
                    echo "<td>". $row['descr'] . "</td>";
                    echo"</tr>"; 
                }
            ?>
        </tbody>

    </table>
    <a id="novo" href="./c_animal.php">Cadastrar novo animal</a>
    <a id="voltar" href="../index.html">Voltar</a>
    </div>
</body>
</html>