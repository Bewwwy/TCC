<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/doa.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Doação</title>
</head>

<body>
    <?php
    require '../componentes/navbar.php';
    ?>

    <header>
        <h1>Faça sua doação!</h1>
        <h3>Está pagina permite que você faça doações financeira para ajudar 
            os animais abandonados.</h3>
    </header>

    <main class="content">
        <div class="banco">
            <div class="text">
                <h3>Nossa organização</h3>
                <h3>PIX:</h3>
            </div>
            <img id="qrcode1" src="../images/qrcode.jpg" alt="qrcode">
        </div>

        <div class="outro">
            <h1 id="org">Outras organizações</h1>
            <div class="banco2">
                    <h3>ONG: Dona Zuleika</h3>
                    <h3>PIX:</h3>
                    <img src="../images/qrcode.jpg" alt="qrcode">
            </div>
        </div>
    </main>

    <?php
    require '../componentes/footer.php';
    ?>
</body>

</html>