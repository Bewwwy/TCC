<?php

declare(strict_types=1);


function input_form() {

    // <label for="nome" id="p1">Nome completo</label>
    // <input type="text" name="nome" id="ip1" maxlength="50" placeholder="Nome completo...">

    // <label id="p1">Data de nascimento</label>
    // <input type="date" name="idade" id="ip2" placeholder="Idade...">

    // <label id="p2">E-mail para contato</label>
    // <input type="email" name="email" id="ip3" maxlength="80" placeholder="E-mail...">

    // <label id="p2">Número de telefone para contato</label>
    // <input type="tel" name="numero" id="ip4" onkeypress="$(this).mask('(00) 00000-0000')" placeholder="Telefone...">

    // <label id="p2">CPF</label>
    // <input type="text" name="cpf" id="ip5" onkeypress="$(this).mask('000.000.000-00');" placeholder="___.___.___-__">

    // <label id="p2">CEP</label>
    // <input type="text" name="cep" id="ip6" onkeypress="$(this).mask('00.000-000')" placeholder="_____-__">

    // <input type="checkbox" name="check" id="ip7" required>
    // <label id="p2">Li e concordo com os termos de responsabilidade adotiva</label>

    echo '<input type="hidden" name="ID_pet" value="'. $_GET['id'] .'">';
    if (isset($_SESSION["data"]["nome"])) {
        echo '<label for="nome" id="p1">Nome completo</label>
        <input type="text" name="nome" id="ip1" maxlength="50" value="'. $_SESSION["data"]["nome"] .'" >';
    } else {
        echo '<label for="nome" id="p1">Nome completo</label>
        <input type="text" name="nome" id="ip1" maxlength="50" placeholder="Nome completo...">';
    }

    if (isset($_SESSION["data"]["idade"])) {
        echo '<label id="p2">Data de nascimento</label>
        <input type="date" name="idade" id="ip2" placeholder="Data de nascimento..." value="'. $_SESSION["data"]["idade"] .'">';
    } else {
        echo '<label id="p2">Data de nascimento</label>
        <input type="date" name="idade" id="ip2" placeholder="Data de nascimento...">';
    }

    if (isset($_SESSION["data"]["email"])) {
        echo '<label id="p3">E-mail para contato</label>
        <input type="email" name="email" id="ip3" maxlength="80" placeholder="E-mail..." value="'. $_SESSION["data"]["email"] .'">';
    } else {
        echo '<label id="p3">E-mail para contato</label>
        <input type="email" name="email" id="ip3" maxlength="80" placeholder="E-mail...">';
    }

    if (isset($_SESSION["data"]["numero"])) { ?>
        <label id="p4">Número de telefone para contato</label>
        <input type="tel" name="numero" id="ip4" onkeypress="$(this).mask('(00) 00000-0000')" placeholder="(__) _____-____" <?php echo 'value="'. $_SESSION["data"]["numero"] .'"'; ?>>
    <?php } else { ?>
        <label id="p4">Número de telefone para contato</label>
        <input type="tel" name="numero" id="ip4" onkeypress="$(this).mask('(00) 00000-0000')" placeholder="(__) _____-____">
    <?php } 

    if (isset($_SESSION["data"]["cpf"])) { ?>
        <div class="column">
        <label id="p5">CPF</label>
        <input type="text" name="cpf" id="ip5" onkeypress="$(this).mask('000.000.000-00');" placeholder="___.___.___-__" <?php echo 'value="'. $_SESSION["data"]["cpf"] .'"'; ?>>
    <?php } else { ?>
        <div class="column">
        <label id="p5">CPF</label>
        <input type="text" name="cpf" id="ip5" onkeypress="$(this).mask('000.000.000-00');" placeholder="___.___.___-__">
    <?php }

    if (isset($_SESSION["data"]["cep"])) { ?>
        <label id="p6">CEP</label>
        <input type="text" name="cep" id="ip6" onkeypress="$(this).mask('00.000-000');"  placeholder="__.___-___" <?php echo 'value="'. $_SESSION["data"]["cep"] .'"'; ?>>
        </div>
    <?php } else { ?>
        <label id="p6">CEP</label>
        <input type="text" name="cep" id="ip6" onkeypress="$(this).mask('00.000-000');" placeholder="__.___-___">
        </div>
    <?php }
    echo '<div class="checkbox">
    <input type="checkbox" name="check" id="ip7" required>
    <label id="p7">Li e concordo com os termos de responsabilidade adotiva</label>
    </div>';

    $_SESSION["data"] = null;

}

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
        echo '<a href="../pages/animais.php"><button>Voltar</button></a>';
    }
}