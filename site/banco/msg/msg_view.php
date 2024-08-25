<?php

declare(strict_types=1);



function input_msg() {
    
        // <label id="p1">Nome completo</label>
        // <input type="text" name="nome" id="ip1" placeholder="Nome completo...">
    
        // <label id="p2">E-mail</label>
        // <input type="email" name="email" id="ip2" placeholder="E-mail...">
    
        // <label id="p2">Deixe sua mensagem</label>
        // <textarea name="mensagem" placeholder="Mensagem..." cols="30" rows="5" id="msg"></textarea>
        // <p id="result">0/700</p>
    
    
        if (isset($_SESSION["msg_data"]["nome"])) {
            echo '<label for="nome" id="p1">Nome completo</label>
            <input type="text" name="nome" id="ip1" placeholder="Nome completo..." value="'. $_SESSION["msg_data"]["nome"] . '">';
        } else {
            echo '<label for="nome" id="p1">Nome</label>
            <input type="text" name="nome" id="ip1" placeholder="Nome completo...">';
        }
    
        if (isset($_SESSION["msg_data"]["email"])) {
            echo '<label for="email" id="p2">Email</label>
            <input type="email" name="email" id="p2" placeholder="Email..." value="' . $_SESSION["msg_data"]["email"] .'">';
        } else {
            echo '<label for="email" id="p2">Email</label>
            <input type="email" name="email" id="p2" placeholder="Email...">';
        }
        if (isset($_SESSION["msg_data"]["msg"])) {
            echo '<label for="Descricao">Mensagem</label>
            <textarea name="msg" placeholder="Mensagem..." cols="30" rows="7" id="msg">'. $_SESSION["msg_data"]["msg"].'</textarea>
            <p id="result">0/700</p>';
        } else {
            echo '<label for="Descricao">Mensagem</label>
            <textarea name="msg" placeholder="Mensagem..." cols="30" rows="7" id="msg"></textarea>
            <p id="result">0/700</p>';
        }
        unset($_SESSION['msg_data']);
    }
    


function check_erros() {
    if (isset($_SESSION['erros_mensagem'])) {

        $erros = $_SESSION['erros_mensagem'];

        echo "<br>";

        foreach($erros as $erro) {
            echo '<p class="form-erro">'. $erro . '</p>';
        }

        unset($_SESSION['erros_mensagem']);
    } else if (isset($_GET["send"]) && $_GET["send"] === "success") {
        echo '<p class="form-success">Mensagem enviada com sucesso!</p>';
    } else {

    }
}