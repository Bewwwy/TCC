<?php
require_once '../banco/config_session.php';
require_once '../banco/conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/animais.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Animais</title>
</head>
<body>

    <?php
    require '../componentes/navbar.php';
    ?>

    <header>
        <h1>Descruba seu novo companheiro!</h1>
        <h3>Nesta página, é possível encontrar nossos animais prontos para serem 
            adotados e que desejam encontrar uma residência amorosa. Cada animal 
            possui características únicas, uma história própria e muito amor para dar.</h3>
    </header>

    <main class="content">
        <section class="animais">



            <?php
                $query = "SELECT * FROM tb_animal ORDER BY ID_pet;";

                $stmt = $pdo->prepare($query);
                $stmt->execute();
                
                $result = $stmt->fetchAll();
                
                
                foreach($result as $row) {

                    echo '<div class="animal">';
                    echo "<a href='informacoes_animal.php?id=". $row['ID_pet'] ."'>";
                    ?>
                    
                    <figure class="an"><img src='../uploads/<?php echo $row['foto']?>' id="f_a" alt="animal"></figure><?php
                    echo "<h2 class='text'>". $row['nome_pet']. "</h2>";
                    echo "<p class='descr'>". $row['descr']. "</p>";
                    echo "</a></div>";
                }
            ?>
            
        </section>
    </main>

    <?php
    require '../componentes/footer.php';
    ?>
</body>

</html>