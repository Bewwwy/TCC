<?php 

declare(strict_types=1);

function check_erros_login() {
    if (isset($_SESSION["erros_login"])){
        $erros = $_SESSION["erros_login"];

        echo "<br>";

        foreach ($erros as $erro) {
            echo '<p class="form-error">' . $erro . '</p>';
        }

        unset($_SESSION["erros_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<br>';
        echo '<p class="form-success">Logado com sucesso!</p>'; 
    }
}