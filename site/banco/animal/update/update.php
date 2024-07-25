<?php 
require_once '../../config_session.php';
require_once '../../conexao.php';
require_once 'update_view.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar animal</title>
</head>
<body>
    <h1>Editar animal</h1>

    <a href="../../../pages/CRUDanimais.php">Voltar à página de animais</a>

    <form action="updatehandler.php" method="post">
    <?php
        $query = "SELECT * FROM tb_animal WHERE ID_pet= :id;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        
        $result = $stmt->fetchAll();



        // echo "<form action='?update=salvar' method='POST'>";

        foreach($result as $row) {
            //id pet
            echo "<input type='hidden' name='ID_pet' value='". $row['ID_pet'] ."'>";

            // nome pet
            echo "<label for'nome'>Nome do pet</label>";
            echo "<input type='text' name='nome_pet' value='". $row['nome_pet']."'>";

            // mostra a foto
            echo "<label for'foto'>Foto</label>";
            ?>
                 <img src='../../../uploads/<?php echo $row['foto']?>'><?php

            // idade
            echo "<label for'idade'>Idade</label>";
            echo "<input type='text' name='idade' value='". $row['idade'] ."' >";

            // sexo
            echo "<label for'sexo'>Sexo</label>";
            echo "<select name='sexo'>
            <option value='Masculino'>Masculino</option>
            <option value='Feminino'>Feminino</option></select>";

            // descrição
            echo "<label for'Descricao'>Descrição</label>";
            echo "<textarea name='descr'>". $row['descr'] ."</textarea>";
            echo "<p id='result'>0/700</p>";


            echo "<button type='submit' class='btnedit' name='edit'>Editar</button>";
        }
    ?>
    </form>

    <script src="../../../js/limit.js"></script>

    <?php

    check_erros_update();

    ?>

    <div class="nova_foto">
        <?php 
            echo "<a href='./update_foto.php?id=". $_GET['id']  ."'>Mudar foto</a>";
        ?>
    </div>

    
</body>
</html>