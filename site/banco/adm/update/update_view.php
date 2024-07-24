<?php

declare(strict_types=1);



function check_erros_update() {
    if (isset($_SESSION['erros_update'])) {
        $erros = $_SESSION['erros_update'];

        echo "<br>";

        foreach($erros as $erro) {
            echo '<p class="form-erro">'. $erro . '</p>';
        }

        unset($_SESSION['erros_update']);
    } else if (isset($_GET["update"]) && $_GET["update"] === "success") {
        echo '<p class="form-success">Atualizado com sucesso!</p>';
        echo '<a href="../../../pages/CRUDADMS.php"><button>Voltar</button></a>';
    }


}