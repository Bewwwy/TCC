<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/doa.css">
    <title>Doação</title>
</head>

<body>
    <?php
    require '../componentes/navbar.php';
    ?>

    <header>
        <h1>Faça sua doação</h1>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare lacinia felis, id dictum eros malesuada
            vitae. Donec bibendum pellentesque odio semper placerat.
            Vivamus eget quam at lectus feugiat ultrices. Morbi eget tortor nisi. Nunc auctor porta venenatis. Proin sit
            amet porta metus. Maecenas varius placerat nulla, id porta
            tortor consequat ac.</h3>
    </header>

    <main class="content">
        <div class="banco">
            <div class="text">
                <h3>Nossa organização</h3>
                <h3>PIX:</h3>
                <h3>Nome:</h3>
                <img src="../images/qrcode.jpg" alt="qrcode">
            </div>
        </div>

        <div class="outro">
            <h1>Outras organizações</h1>
            <div class="banco2">
                <div class="text">
                    <h3>Nome da ONG</h3>
                    <h3>PIX:</h3>
                    <h3>Nome:</h3>
                    <img src="../images/qrcode.jpg" alt="qrcode">
                </div>
            </div>
        </div>
    </main>

    <?php
    require '../componentes/footer.php';
    ?>
</body>

</html>