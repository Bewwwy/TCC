<?php
require_once '../banco/config_session.php';
require_once '../banco/msg/msg_view.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Formulário de contato</title>
</head>
<body>
    <?php
    require '../componentes/navbar.php';
    ?>

    <main class="content">
        <form action="../banco/msg/msghandler.php" method="post">
            <h1>Formulário de contato</h1>
<!-- 
            <label id="p1">Nome completo</label>
            <input type="text" name="nome" id="ip1" placeholder="Nome completo...">

            <label id="p2">E-mail</label>
            <input type="email" name="email" id="ip2" placeholder="E-mail...">

            <label id="p2">Deixe sua mensagem</label>
            <textarea name="msg" placeholder="Mensagem..." cols="30" rows="5" id="msg"></textarea>
            <p id="result">0/700</p> -->
            <?php
            input_msg();

            ?>


            <input type="submit" value="Enviar" id="btn">
        </form>

        
        <?php
        check_erros();
        ?>
    </main>
    
    <?php
    require '../componentes/footer.php';
    ?>

    <script src="../js/limit.js"></script>
</body>
</html>