<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID_pet"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // $idade = (int) preg_replace('/[^0-9]/', '', $_POST["idade"]);
    $idade = date('Y-m-d', strtotime($_POST["idade"]));

    $cpf = (int) preg_replace('/[^0-9]/', '', $_POST["cpf"]);
    $cep = (int) preg_replace('/[^0-9]/', '', $_POST["cep"]);
    $numero = (int) preg_replace('/[^0-9]/', '', $_POST["numero"]);

    $check = $_POST["check"];

    try {
        require_once "../conexao.php";
        require_once "f_model.php";
        require_once "f_contr.php";
        
        // ERROR HANDLERS
        $erros = [];

        if (is_input_empty($nome, $email, $idade, $cpf, $cep, $numero, $check)) {
            $erros["empty_input"] = "Preencha todos os campos!";
            $erros["nsei"] = $idade .", ". $numero .", ". $cpf .", ". $check ;
        }

        require_once "../config_session.php";

        if ($erros) {
            $_SESSION["erros_formulario"] = $erros;


            header("Location: ../../pages/form_adocao.php?id=". $id);
            die();
        }

        // create_user($pdo, $nome, $user, $senha);

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