<?php

declare(strict_types=1);


function check_erros_update() {
    if (isset($_SESSION['erros_update_foto'])) {
        $erros = $_SESSION['erros_update_foto'];

        echo "<br>";

        foreach($erros as $erro) {
            echo '<p class="form-erro">'. $erro . '</p>';
        }

        unset($_SESSION['erros_update_foto']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p class="form-success">Foto atualizada com sucesso!</p>'; 
    }
}