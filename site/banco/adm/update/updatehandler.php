<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID_adm"];
    $nome = $_POST["nome"];
    $user = $_POST["user"];
    $senha = $_POST["senha"];

    try {
        require_once "../../conexao.php";
        require_once "update_model.php";
        require_once "update_contr.php";


        // ERROR HANDLERS
        $erros = [];

        if (is_input_empty($nome, $user, $senha)) {
            $erros["empty_input"] = "Preencha todos os campos!";
        }


        require_once "../../config_session.php";

        if ($erros) {
            $_SESSION["erros_update"] = $erros;

            $update_data = [
                "nome" => $nome,
                "user" => $user,
            ];
            $_SESSION["update_data"] = $update_data;

            header("Location: update.php?id=". $id);
            die();
        }

        update_user($pdo, $id, $nome, $senha);

        header("Location: update.php?update=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed; " . $e->getMessage());
    }
}