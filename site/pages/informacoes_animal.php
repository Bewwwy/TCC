<?php 
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/info_animal.css">
    <title>Informações do animal</title>
</head>
<body>
    <?php
    require '../componentes/navbar.php';
    ?>
    <main class="content">
        <div class="animal">

            <?php

                $query = "SELECT * FROM tb_animal WHERE ID_pet= :id;";

                $stmt = $pdo->prepare($query);
                $stmt->bindParam(":id", $id);
                $stmt->execute();
                
                $result = $stmt->fetchAll();

                foreach($result as $row) {

                    echo "<div class='foto'><figure><img src='../uploads/". $row['foto']. "' alt='gatos'></figure></div>";
                    echo "<div class='infos'><h2>". $row['nome_pet']. "</h2>";
                    echo "<p id='idade'>Idade: ". $row['idade']. " ano(s)</p>";
                    echo "<p id='sexo'>Sexo: ". $row['sexo']. "</p>";
                    echo "<p id='descr'>". $row['descr']. "</p>";
                    echo "<a href='form_adocao.php?id=". $id ."' target='_blank' id='btn'>Quero adotar!</a>";
                    echo "</div>";
                }

            ?>
        </div>
    </main>

    <?php
    require '../componentes/footer.php';
    ?>
</body>
</html>
