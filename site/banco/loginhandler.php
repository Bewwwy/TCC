<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $senha = $_POST["senha"];


    try {
        require_once "conexao.php";
        require_once "l_model.php";
        require_once "l_contr.php";



        
        // ERROR HANDLERS
        $erros = [];

        if (is_input_empty($user, $senha)) {
            $erros["empty_input"] = "Preencha todos os campos!";
        }
        
        $result = get_user($pdo, $user);

        if (is_user_wrong($result)) {
            $erros["login_incorrect"] = "Usuário errado!";
        }

        if (!is_user_wrong($result) && is_password_wrong($senha, $result["senha"])) {
            $erros["login_incorrect"] = "Senha incorreta!";
        }

        require_once "config_session.php";

        

        if ($erros) {
            $_SESSION["erros_login"] = $erros;

            header("Location: ../pages/login.php");
            die();
        }

        $novaSessaoID = session_create_id();

        $sessaoID = $novaSessaoID . "_" . $result["ID_adm"];
        session_id($sessaoID);

        $_SESSION["user_id"] = $result["ID_adm"];
        $_SESSION["user_user"] = htmlspecialchars( $result["user"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../pages/login.php?login=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../pages/login.php");
    die();
}