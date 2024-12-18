<?php

declare(strict_types=1);



// <label for="nome_pet">Nome do animal</label>
// <input type="text" name="nome_pet" placeholder="Nome do animal">

// <label for="foto">Foto</label>
// <input type="file" name="foto" accept=".jpeg, .jpg, .png">

// <label for="idade">Insira a idade do animal em anos*</label>
// <input type="number" name="idade" placeholder="Idade em anos" min="0">

// <label for="sexo">Sexo</label>
// <select name="sexo" >
//     <option value="Masculino">Masculino</option>
//     <option value="Feminino">Feminino</option>
// </select>

// <label for="Descricao">Descrição</label>
// <textarea name="descr" placeholder="Descrição..." cols="30" rows="5" id="msg"></textarea>
// <p id="result">0/700</p>

function input_cadastro() {
    if (isset($_SESSION["signup_data"]["nome_pet"])) {
        echo '<label for="nome_pet">Nome do animal</label>
        <input type="text" name="nome_pet" id="lb1" placeholder="Nome do animal" value="'. $_SESSION["signup_data"]["nome_pet"].'" maxlength="30">';
    } else {
        echo '<label for="nome_pet">Nome do animal</label>
        <input type="text" name="nome_pet" id="lb1" placeholder="Nome do animal" maxlength="30">';
    }

    if (isset($_SESSION["signup_data"]["idade"])){
        echo '<label for="idade">Insira a idade do animal em anos*</label>
        <input type="number" name="idade" id="lb2" placeholder="Idade em anos" min="0" value="'.$_SESSION["signup_data"]["idade"].'">';
    } else {
        echo '<label for="idade">Insira a idade do animal em anos inteiros*</label>
        <input type="number" name="idade" id="lb2" min="0" value="0">';
    }

    echo '<label for="foto">Foto</label>
    <input id="imagem" type="file" name="foto" accept=".jpeg, .jpg, .png">';

    echo '<label for="sexo">Sexo</label>
    <select name="sexo" id="lb3">
    <option hidden value=""></option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    </select>';

    if (isset($_SESSION["signup_data"]["descr"])) {
        echo '<label for="Descricao">Descrição</label>
        <textarea type="text" name="descr" placeholder="Descrição..." id="msg">'. $_SESSION["signup_data"]["descr"].'</textarea>
        <p id="result">0/700</p>';
    } else {
        echo '<label for="Descricao">Descrição</label>
        <textarea name="descr" placeholder="Descrição..." id="msg"></textarea>
        <p id="result">0/700</p>';
    }
}

function check_erros_cadastro() {
    if (isset($_SESSION['erros_cadastro'])) {
        $erros = $_SESSION['erros_cadastro'];

        echo "<br>";

        foreach($erros as $erro) {
            echo '<p class="form-erro">'. $erro . '</p>';
        }

        unset($_SESSION['erros_cadastro']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p class="form-success">Cadastrado com sucesso!</p>'; 
    }
}