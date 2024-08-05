<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID_pet"];
    $nome_pet = $_POST["nome_pet"];
    // $foto = $_POST["foto"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $descr = $_POST["descr"];

    $tam = strlen($descr);

    try {
        require_once "../../conexao.php";
        require_once "update_model.php";
        require_once "update_contr.php";


        // ERROR HANDLERS
        $erros = [];

        // Checa se algum input está vazio
        // Se algum campo estiver vazio, gera um erro
        if (is_input_empty($nome_pet, $idade, $sexo, $descr)) {
            $erros["empty_input"] = "Preencha todos os campos!";
        }

        // Checa se a descrição é muito grande
        if ($tam > 700) {
            $erros["long_descr"] = "A descrição possui caracteres de mais!";
        }


        // Se há algum erro, armazena as informações fornecidas pelo forms na sessão e redireciona para a página de cadastro
        require_once "../../config_session.php";

        if ($erros) {
            $_SESSION["erros_update"] = $erros;

            $update_data = [
                "nome_pet" => $nome_pet,
                "idade" => $idade,
                "sexo" => $sexo,
                "descr" => $descr,
            ];
            $_SESSION["update_data"] = $update_data;

            header("Location: update.php?id=". $id);
            die();
        }

        update_pet($pdo, $id, $nome_pet, $idade, $sexo, $descr);

        header("Location: update.php?update=success&id=" .$id);

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed; " . $e->getMessage());
    }
} else {
    header("Location: ../../../pages/CRUDanimais.php");
}