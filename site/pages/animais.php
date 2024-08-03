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
    <nav>
        <a href="../index.html"><img class="logo" src="../images/logo.svg" alt="logo"></a>
        <ul class="nav_links">
            <li><a href="./animais.php">Animais</a></li>
            <li><a href="./direitos_deveres.html">Direitos e deveres</a></li>
            <li><a href="../pages/doacao.html">Doações</a></li>
            <li><a href="../pages/form.php">Contato</a></li>
        </ul>
    </nav>

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
            <article class="column">
                <figure><img src="../images/gatos.jpg" alt="gatos"></figure>
                <h2>Gatinho 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque lectus, interdum quis
                    sodales sit amet, tincidunt nec mi. Vivamus sed scelerisque ex. Aenean
                    vitae malesuada urna. Donec in suscipit ante. Ut et fringilla dui.</p>
            </article>

            <article class="column">
                <figure><img src="../images/gatos.jpg" alt="gatos"></figure>
                <h2>Gatinho 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque lectus, interdum quis
                    sodales sit amet, tincidunt nec mi. Vivamus sed scelerisque ex. Aenean
                    vitae malesuada urna. Donec in suscipit ante. Ut et fringilla dui.</p>
            </article>

            <article class="column">
                <figure><img src="../images/gatos.jpg" alt="gatos"></figure>
                <h2>Gatinho 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque lectus, interdum quis
                    sodales sit amet, tincidunt nec mi. Vivamus sed scelerisque ex. Aenean
                    vitae malesuada urna. Donec in suscipit ante. Ut et fringilla dui.</p>
            </article>

            <article class="column">
                <figure><img src="../images/gatos.jpg" alt="gatos"></figure>
                <h2>Gatinho 4</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque lectus, interdum quis
                    sodales sit amet, tincidunt nec mi. Vivamus sed scelerisque ex. Aenean
                    vitae malesuada urna. Donec in suscipit ante. Ut et fringilla dui.</p>
            </article>

            <article class="column">
                <figure><img src="../images/gatos.jpg" alt="gatos"></figure>
                <h2>Gatinho 5</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque lectus, interdum quis
                    sodales sit amet, tincidunt nec mi. Vivamus sed scelerisque ex. Aenean
                    vitae malesuada urna. Donec in suscipit ante. Ut et fringilla dui.</p>
            </article>



            <?php
                $query = "SELECT * FROM tb_animal ORDER BY ID_pet;";

                $stmt = $pdo->prepare($query);
                $stmt->execute();
                
                $result = $stmt->fetchAll();
                
                
                foreach($result as $row) {


                    echo "<a href='informacoes_animal.php?id=". $row['ID_pet'] ."'>";
                    ?>
                    <article class="column">
                    <figure><img src='../uploads/<?php echo $row['foto']?>' alt="gatos"></figure><?php
                    echo "<h2>". $row['nome_pet']. "</h2>";
                    echo "<p>". $row['descr']. "</p>";
                    echo "</article></a>";
                }
            ?>
            
        </section>
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