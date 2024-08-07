<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crudAnimal.css">
    <title>CRUD Animais</title>
</head>
<body>
    <div class="wawa">
    <h1>Gerenciar Animais</h1>
    <h2>Lista de Animais</h2>
    <a id="novo" href="./c_animal.php">Cadastrar novo animal</a>
    <a id="voltar" href="adm.html">Voltar</a>
    <table class="tableAnimal">
        <thead>
            <tr>
                <th>ID_pet</th>
                <th>Nome do pet</th>
                <th>Foto</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Descrição</th>
                <th>Editar</th>
                <th>Excluir</th>  
            </tr>
        </thead>
        <tbody>
        <?php
                $query = "SELECT * FROM tb_animal ORDER BY ID_pet;";

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
                    echo "<td><a href='../banco/animal/update/update.php?id=". $row['ID_pet'] ."'>Editar</a></td>";
                    echo "<td><a href='../banco/animal/delete/deletehandler.php?id=". $row['ID_pet'] ."'>Excluir</a></td>";
                    echo"</tr>"; 
                }
            ?>
        </tbody>

    </table>
    </div>
</body>
</html>