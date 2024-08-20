<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    try {
        require_once "../conexao.php";
        require_once "msg_model.php";
        require_once "msg_contr.php";
        
        // ERROR HANDLERS
        $erros = [];

        if (is_input_empty($nome, $email, $msg)) {
            $erros["empty_input"] = "Preencha todos os campos!";
        }
        if (strlen($nome) > 50) {
            $erros["long_name"] = "Nome muito longo!";
        }
        if (strlen($email) > 80) {
            $erros["long_email"] = "Email muito longo!";
        }
        if (strlen($msg) > 700) {
            $erros["long_msg"] = "Mensagem muito longa!";
        }

        require_once "../config_session.php";

        if ($erros) {
            $_SESSION["erros_msg"] = $erros;

            $msg_data = [
                "nome" => $nome,
                "email" => $email,
                "msg" => $msg
            ];
            $_SESSION["msg_data"] = $msg_data;

            header("Location: ../../pages/form.php");
            die();
        }

        send_form($pdo, $nome, $email, $msg);

        header("Location: ../../pages/form.php?send=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../../pages/form.php");
    die();
}