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
    <link rel="stylesheet" href="../../../css/u_f_animal.css">
    <title>Editar animal</title>
</head>
<body>
    <div class="container">
        <a id="vol" href="update.php?id=<?php echo$id; ?>"><img src="../../../images/back.png" alt="voltar símbolo"><p>Voltar</p></a>
        <div class="info-animal">
            <h1>Atualizar foto</h1>

            <form action="update_fotohandler.php" method="post" enctype="multipart/form-data">

                <?php 
                    echo "<input type='hidden' name='ID_pet' value='". $id ."'>";
                ?>

                <!-- foto -->
                <input type="file" name="foto" accept=".jpeg, .jpg, .png" required>

                <button type='submit' id='btn' name='edit'>Atualizar</button>

            </form>

            <?php

            check_erros_update();

            ?>
        </div>
    </div>
</body>
</html>
