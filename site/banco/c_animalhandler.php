<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Informações do animal
    $nome_pet = $_POST["nome_pet"];
    $idade = $_POST["idade"]; 
    $sexo = $_POST["sexo"];
    $descr = $_POST["descr"];

    // Informações da foto
    $foto = $_FILES['foto'];

    $foto_nome = $_FILES['foto']['name'];
    $foto_tmpname = $_FILES['foto']['tmp_name'];
    $foto_size = $_FILES['foto']['size'];
    $foto_error = $_FILES['foto']['error'];
    $foto_type = $_FILES['foto']['type'];

    $fotoExt = explode('.', $foto_nome);
    $fotoActualExt = strtolower(end($fotoExt));

    $permitido = array('jpg', 'jpeg', 'png');

    try {
        require_once "conexao.php";
        require_once "c_animal_model.php";
        require_once "c_animal_contr.php";

        // ERROR HANDLERS
        $erros = [];

        // Se algum campo estiver vazio, gera um erro
        // Checa se algum input está vazio
        if (is_input_empty($nome_pet, $idade, $sexo, $descr)) {
            $erros["empty_input"] = "Preencha todos os campos!";
        }

        // Checa se a extensão é permitida
        if (!in_array($fotoActualExt, $permitido)) {
            $erros["invalid_type"] = "Você não pode realizar upload de imagens deste tipo!";
        }

        // Checa se há algum erro com a foto
        if (!$foto_error === 0) {
            $erros["foto_erro"] = "Houve um erro ao realizar o upload de sua foto!";
        }

        // Checa se o tamanho da foto é muito grande
        if ($foto_size > 1000000) {
            $erros["foto_grande"] = "Sua foto é muito grande!";
        }

        // Se há algum erro, armazena as informações fornecidas pelo forms na sessão e redireciona para a página de cadastro
        require_once "config_session.php";

        if ($erros) {
            $_SESSION["erros_cadastro"] = $erros;

            $signup_data = [
                "nome_pet" => $nome_pet,
                "idade" => $idade,
                "descr" => $descr,
            ];
            $_SESSION["signup_data"] = $signup_data;

            header("Location: ../pages/c_animal.php");
            die();
        }

        // Caso tudo esteja ok, move a foto e insere um animal
        $foto_novo_nome = uniqid('', true).".". $fotoActualExt;
        $foto_destino = '../uploads/'. $foto_novo_nome;
        move_uploaded_file($foto_tmpname, $foto_destino);
        create_pet($pdo, $nome_pet, $foto_novo_nome, $idade, $sexo, $descr);

        header("Location: ../pages/c_animal.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
    
} else {
    header("Location: ../pages/c_animal.php");
    die();
}