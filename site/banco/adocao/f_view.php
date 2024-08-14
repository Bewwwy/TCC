<?php

declare(strict_types=1);



function check_erros_formulario() {
    if (isset($_SESSION['erros_formulario'])) {
        $erros = $_SESSION['erros_formulario'];

        echo "<br>";

        foreach($erros as $erro) {
            echo '<p class="form-erro">'. $erro . '</p>';
        }

        unset($_SESSION['erros_formulario']);
    } else if (isset($_GET["send"]) && $_GET["send"] === "success") {
        echo '<p class="form-success">Pedido de adoção enviado com sucesso!</p>';
        echo '<a href="../../../pages/CRUDanimais.php"><button>Voltar</button></a>';
    }


}