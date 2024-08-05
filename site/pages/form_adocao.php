<?php 
require_once '../banco/config_session.php';
require_once '../banco/adocao/f_view.php';
$id = $_GET['id']

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Formulário de adoção</title>
</head>
<body>
    <form action="../banco/adocao/f_adocaohandler.php" method="post">
        <h1>Formulário de adoção</h1>

        <input type='hidden' name='ID_pet' value='<?php echo $id; ?>'>

        <label for="nome" id="p1">Nome completo</label>
        <input type="text" name="nome" id="ip1" placeholder="Nome completo...">
        <p>&#40;Máximo de 50 caracteres&#41;</p>

        <label id="p1">Idade</label>
        <input type="number" name="idade" id="ip2" placeholder="Idade...">

        <label id="p2">E-mail</label>
        <input type="email" name="email" id="ip3" placeholder="E-mail...">

        <label id="p2">Número de telefone para contato</label>
        <input type="tel" name="numero" id="ip4" onkeypress="$(this).mask('(00) 0000-00009')" placeholder="Telefone...">

        <label id="p2">CPF</label>
        <input type="text" name="cpf" id="ip5" onkeypress="$(this).mask('000.000.000-00');" placeholder="___.___.___-__">

        <label id="p2">CEP</label>
        <input type="text" name="cep" id="ip6" onkeypress="$(this).mask('00.000-000')" placeholder="_____-__">

        <input type="checkbox" name="check" id="ip7" required>
        <label id="p2">Li e concordo sla o q</label>

        <input type="submit" value="Enviar" id="btn">

    </form>

    <?php

    check_erros_formulario();

    ?>

    
</body>
</html>