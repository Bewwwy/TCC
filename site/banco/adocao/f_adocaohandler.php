<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID_pet"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // $idade = (int) preg_replace('/[^0-9]/', '', $_POST["idade"]);
    $idade = date('Y-m-d', strtotime($_POST["idade"]));

    // $numero = (int) preg_replace('/[^0-9]/', '', $_POST["numero"]);
    // $cpf = (int) preg_replace('/[^0-9]/', '', $_POST["cpf"]);
    // $cep = (int) preg_replace('/[^0-9]/', '', $_POST["cep"]);
    $numero = $_POST["numero"];
    $cpf = $_POST["cpf"];
    $cep = $_POST["cep"];


    $check = $_POST["check"];

    try {
        require_once "../conexao.php";
        require_once "f_model.php";
        require_once "f_contr.php";
        
        // ERROR HANDLERS
        $erros = [];

        if (is_input_empty($nome, $email, $idade, $cpf, $cep, $numero, $check)) {
            $erros["empty_input"] = "Preencha todos os campos!";
            $erros["nsei"] = $idade .", ". $numero .", ". $cpf .", ". $cep .", ". $check ;
        }
        if (strlen($nome) > 50) {
            $erros["long_name"] = "Nome muito longo!";
        }
        if (strlen($email) > 80) {
            $erros["long_email"] = "Email muito longo!";
        }
        if ((strlen($numero) > 15) or strlen($numero) < 14) {
            $erros["invalid_tel"] = "Número de telefone inválido!";
        }
        if (strlen($cpf) != 14) {
            $erros["invalid_cpf"] = "CPF inválido!";
        }
        if (strlen($cep) != 10) {
            $erros["invalid_cep"] = "CEP inválido!";
        }

        require_once "../config_session.php";

        if ($erros) {
            $_SESSION["erros_formulario"] = $erros;

            $data = [
                "nome" => $nome,
                "email" => $email,
                "idade" => $idade,
                "numero" => $numero,
                "cpf" => $cpf,
                "cep" => $cep
            ];
            $_SESSION["data"] = $data;

            header("Location: ../../pages/form_adocao.php?id=". $id);
            die();
        }

        send_form($pdo, $id, $nome, $idade, $email, $numero, $cpf, $cep);

        header("Location: ../../pages/form_adocao.php?send=success&id=". $id);

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../../pages/animais.php");
    die();
}