<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Informações do animal
    $id = $_POST['ID_pet'];
    $foto = $_FILES['foto'];

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
        require_once "../../conexao.php";
        require_once "update_foto_model.php";
        require_once "update_foto_contr.php";

        // ERROR HANDLERS
        $erros = [];

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
        require_once "../../config_session.php";

        if ($erros) {
            $_SESSION["erros_update_foto"] = $erros;

            header("Location: update_foto.php?id=$id");
            die();
        }

        // Caso tudo esteja ok, move a foto e insere um animal
        $foto_novo_nome = uniqid('', true).".". $fotoActualExt;
        $foto_destino = '../../../uploads/'. $foto_novo_nome;
        move_uploaded_file($foto_tmpname, $foto_destino);
        update_pet($pdo, $id, $foto_novo_nome);

        header("Location: update_foto.php?id=$id&signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../../../pages/CRUDanimais.php");
    die();
}