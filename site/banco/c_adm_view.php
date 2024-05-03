<?php

declare(strict_types=1);

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