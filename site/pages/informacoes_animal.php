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
    <title>Informações do animal</title>
</head>
<body>
    <nav>
        <a href="../index.html"><img class="logo" src="../images/logo.svg" alt="logo"></a>
        <ul class="nav_links">
            <li><a href="./animais.php">Animais</a></li>
            <li><a href="./direitos_deveres.html">Direitos e deveres</a></li>
            <li><a href="../pages/doacao.html">Doações</a></li>
            <li><a href="../pages/form.php">Contato</a></li>
        </ul>
    </nav>
    <main class="content">

    <?php

        $query = "SELECT * FROM tb_animal WHERE ID_pet= :id;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        
        $result = $stmt->fetchAll();

        foreach($result as $row) {

            echo "<figure><img src='../uploads/". $row['foto']. "' alt='gatos'></figure>";
            echo "<h2>". $row['nome_pet']. "</h2>";
            echo "<p>Idade em anos: ". $row['idade']. "</p>";
            echo "<p>Sexo: ". $row['sexo']. "</p>";
            echo "<p>". $row['descr']. "</p>";
            echo "<a href='form_adocao.php?id=". $id ."' target='_blank'>Quero adotar!</a>";
        }

    ?>

    </main>

    <footer>
        <ul class="footer_links">
            <li><a href="">Nome/logo</a></li>
            <li><a href="">Animais</a></li>
            <li><a href="">Direitos e deveres</a></li>
            <li><a href="">Doações</a></li>
            <li><a href="">Contato</a></li>
            <li><a href="./login.php">Login</a></li>
        </ul>
    </footer>
</body>
</html>
