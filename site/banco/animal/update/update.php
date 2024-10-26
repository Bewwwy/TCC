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
    <link rel="stylesheet" href="../../../css/u_animal.css">
    <title>Editar animal</title>
</head>
<body>
    <div class="container">
        <a id="vol" href="../../../pages/CRUDanimais.php"><img src="../../../images/back.png" alt="voltar símbolo"><p>Voltar</p></a>
        <section class="cad-animal">
            <h1>Editar animal</h1>

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
                    echo "<input type='text' name='nome_pet' id='lb1' value='". $row['nome_pet']."' maxlength='30'>";

                    // mostra a foto
                    ?>
                        <img src='../../../uploads/<?php echo $row['foto']?>' id='f_pet'><?php
                    echo "<a href='./update_foto.php?id=". $_GET['id']  ."' id='change'>Mudar foto</a>";

                    // idade
                    echo "<label for'idade'>Idade</label>";
                    echo "<input type='number' name='idade' id='lb2' value='". $row['idade'] ."' min='1' max='99' >";

                    // sexo
                    echo "<label for'sexo'>Sexo</label>";
                    echo "<select name='sexo' id='lb3'>
                    <option selected='selected'>". $row['sexo']."</option>";
                    if($row['sexo'] == 'Masculino') {
                        echo "<option value='Feminino'>Feminino</option></select>";
                    } else {
                        echo "<option value='Masculino'>Masculino</option></select>";
                    }

                    // descrição
                    echo "<label for'descr'>Descrição</label></a>";
                    echo "<textarea name='descr' id='msg'>". $row['descr'] ."</textarea>";
                    echo "<p id='result'></p>";


                    echo "<button type='submit' id='btn' name='edit'>Editar</button>";
                }
            ?>
            </form>

            <script src="../../../js/limit.js"></script>

            <?php

            check_erros_update();

            ?>
        </section>
    </div>
</body>
</html>