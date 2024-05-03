<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $user = $_POST["user"];
    $senha = $_POST["senha"];

    try {
        require_once "conexao.php";
        require_once "c_adm_model.php";
        require_once "c_adm_contr.php";


        // ERROR HANDLERS
        $erros = [];

        if (is_input_empty($nome, $user, $senha)) {
            $erros["empty_input"] = "Preencha todos os campos!";
        }
        if (is_username_taken($pdo, $user)) {
            $erros["user_taken"] = "Usuário já existente!";
        }

        require_once "config_session.php";

        if ($erros) {
            $_SESSION["erros_cadastro"] = $erros;
            header("Location: ../pages/c_adm.php");
            die();
        }

        create_user($pdo, $nome, $user, $senha);

        header("Location: ../pages/c_adm.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../pages/c_adm.php");
    die();
}