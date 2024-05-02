<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $user = $_POST["user"];
    $senha = $_POST["senha"];

    try {
        require_once "conexao.php";

        $query = "INSERT INTO tb_adm (nome, user, senha) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$nome, $user, $senha]);

        $pdo = null;
        $stmt = null;

        header("Location: ../pages/CRUDADMs.html");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../pages/CRUDADMs.html");
}