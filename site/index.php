<?php
require_once 'banco/config_session.php';
require_once 'banco/conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Home</title>
</head>

<body>
    <nav>
        <a id="home" href="./index.php"><img class="logo" src="images/logo.svg" alt="logo"><p>Patas & Amigos</p></a>
        <ul class="nav_links">
            <a href="./pages/animais.php"><li>Animais</li></a>
            <a href="./pages/direitos_deveres.php"><li>Direitos e deveres</li></a>
            <a href="./pages/doacao.php"><li>Doações</li></a>
            <a href="./pages/form.php"><li>Contato</li></a>
        </ul>
    </nav>

    <header>
        <h1>Seja bem vindo(a)!</h1>
        <h3>Patas e amigos é um serviço online que conecta animais abandonados a pessoas em busca de um amigo fiel. 
            Queremos criar a adoção responsável, proporcionando um ambiente seguro e confiável para que você encontre 
            o animal de estimação perfeito para sua família.</h3>
    </header>

    <main class="content">
        <section class="a">
            <article class="row1">
                <figure><img src="images/cachorro_sorrindo.png" alt="cachorro sorridente"></figure>
                <div class="text">
                    <h2>O que significa adotar?</h2>
                    <p>Adotar animais é um gesto de carinho e solidariedade que muda realidades. Quando você adota um 
                        animal, está salvando uma vida e proporcionando um lar cheio de amor e atenção. Além do mais, você 
                        ajuda a reduzir a quantidade de animais abandonados nas ruas.</p>
                </div>
            </article>

            <article class="row2">
                <div class="text">
                    <p>Patas e amigos não é apenas um site de adoção, vai além disso. Nós somos amantes de animais que 
                        acreditamos na força da amizade. Acreditamos que todos os animais merecem ter uma família amorosa e 
                        um lar para chamar deles. Dessa forma, buscamos sem descanso por lares felizes para os animais 
                        abandonados e difundimos a importância da adoção responsável.</p>
                </div>
                <figure><img src="images/gato_deitado.png" alt="gatinho deitado"></figure>
            </article>
        </section>

        <section class="b">
            <section class="animais">
                
                <?php
                    $query = "SELECT * FROM tb_animal  ORDER BY ID_pet LIMIT 4;";

                    $stmt = $pdo->prepare($query);
                    $stmt->execute();
                    
                    $result = $stmt->fetchAll();
                    
                    
                    foreach($result as $row) {

                        echo '<div class="animal">';
                        echo "<a href='pages/informacoes_animal.php?id=". $row['ID_pet'] ."'>";
                        ?>
                        
                        <figure class="an"><img src='uploads/<?php echo $row['foto']?>' id="f_a" alt="animal"></figure><?php
                        echo "<h2>". $row['nome_pet']. "</h2>";
                        echo "<p class='descr'>". $row['descr']. "</p>";
                        echo "</a></div>";
                    }
                ?>
            </section>
            <a href="pages/animais.php" id='link'>Ver mais animais</a>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="intro">
                <h4>Patas & Amigos</h4>
                <p>Todo animalzinho merece um lar. Faça a diferença!</p>
            </div>
            <div class="col">
                <h4>Links rápidos</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="pages/animais.php">Animais</a></li>
                    <li><a href="pages/direitos_deveres.php">Direitos e deveres</a></li>
                    <li><a href="pages/doacao.php">Doações</a></li>
                    <li><a href="pages/form.php">Contato</a></li>
                    <li><a href="pages/login.php">Login</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Informações de contato</h4>
                <ul>
                    <li>+55 (17) 99123-4567</li>
                    <li>pataseamigos@gmail.com</li>
                    <li>Bebedouro, SP - Brasil</li>
                </ul>
            </div>
            <div class="f_logo">
                <figure><img src="images/logo.svg" id="logo" alt="logo"></figure>
            </div>
        </div>
    </footer>
</body>

</html>