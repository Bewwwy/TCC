<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $user = $_POST["user"];
    $senha = $_POST["senha"];

    try {
        require_once "../../conexao.php";
 





    } catch (PDOException $e) {
        die("Query failed; " . $e->getMessage());
    }
}