<?php 
require_once '../banco/config_session.php';
require_once '../banco/animal/c_animal_view.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../css/c_animal.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Cadastrar Animal</title>
</head>
<body>
    <div class="container">
        <a id="vol" href="CRUDanimais.php"><img src="../images/back.png" alt="voltar símbolo"><p>Voltar</p></a>
        <section class="info-animal">
            <h1>Cadastrar Animal</h1>
            <form action="../banco/animal/c_animalhandler.php" method="post" enctype="multipart/form-data">
            <!-- <label for="nome_pet">Nome do animal</label>
            <input type="text" name="nome_pet" placeholder="Nome do animal">

            <label for="foto">Foto</label>
            <input type="file" name="foto" accept=".jpeg, .jpg, .png">
            
            <label for="idade">Insira a idade do animal em anos*</label>
            <input type="number" name="idade" placeholder="Idade em anos" min="0">
            
            <label for="sexo">Sexo</label>
            <select name="sexo" >
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>

            <label for="Descricao">Descrição</label>
            <textarea name="descr" placeholder="Descrição..." cols="30" rows="5" id="msg"></textarea>
            <p id="result">0/700</p> -->

            <?php 
            input_cadastro();
            ?>
            <button id="btn" type="submit">Cadastrar</button>
            </form>
        
        </section>
        <?php

        check_erros_cadastro();

        ?>
    </div>
    
    <script src="../js/limit.js"></script>
</body>
</html>