<?php 
require_once '../../config_session.php';
require_once '../../conexao.php';
require_once 'update_foto_view.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar animal</title>
</head>
<body>
    <h1>Atualizar foto</h1>

    <a href="../../../pages/CRUDanimais.php">Voltar à página de animais</a>

    <form action="update_fotohandler.php" method="post" enctype="multipart/form-data">

        <?php 
            echo "<input type='hidden' name='ID_pet' value='". $id ."'>";
        ?>

        <!-- foto -->
        <label for="foto">Foto</label>
        <input type="file" name="foto" accept=".jpeg, .jpg, .png" required>

        <button type="submit">Atualizar</button>

    </form>

    <?php

    check_erros_update();

    ?>
    
</body>
</html>
