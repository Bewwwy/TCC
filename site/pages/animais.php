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
    <title>Animais</title>
</head>
<body>

    <?php
    require '../componentes/navbar.php';
    ?>

    <header>
        <h1>Título da página animais</h1>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare lacinia felis, id dictum eros malesuada
            vitae. Donec bibendum pellentesque odio semper placerat.
            Vivamus eget quam at lectus feugiat ultrices. Morbi eget tortor nisi. Nunc auctor porta venenatis. Proin sit
            amet porta metus. Maecenas varius placerat nulla, id porta
            tortor consequat ac.</h3>
    </header>

    <main class="content">
        <section class="a">



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
                    echo "<p class='text'>". $row['descr']. "</p>";
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