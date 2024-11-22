<?php

declare(strict_types=1);


function input_cadastro() {
    // <label for="nome">Nome</label>
    // <input type="text" name="nome" id="" placeholder="Nome">
    // <label for="user">Usuário</label>
    // <input type="text" name="user" placeholder="Usuário">


    if (isset($_SESSION["signup_data"]["nome"])) {
        echo '<input type="text" name="nome" id="" placeholder="Nome" value="'. $_SESSION["signup_data"]["nome"] . '" maxlength="50">';
    } else {
        echo '<input type="text" name="nome" id="lb1" placeholder="Nome" maxlength="50">';
    }

    if (isset($_SESSION["signup_data"]["user"]) && !isset($_SESSION["erros_cadastro"]["user_taken"])) {
        echo '<input type="text" name="user" placeholder="Usuário" value="' . $_SESSION["signup_data"]["user"] .'" maxlength="15">';
    } else {
        echo '<input type="text" name="user" id="lb2" placeholder="Usuário" maxlength="15">';
    }
    echo '<input type="password" name="senha" id="lb3" placeholder="Senha">';
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