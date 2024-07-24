<?php

declare(strict_types=1);


function get_username(object $pdo, string $user) {
    $query = "SELECT user FROM tb_adm WHERE user = :user;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user", $user);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function set_user(object $pdo, int $id, string $nome, string $senha) {
    $query = "UPDATE tb_adm SET nome = :nome, senha = :senha WHERE ID_adm = :id;";

    $stmt = $pdo->prepare($query);

    $options = ["cost" => 12];
    $hashedpwd = password_hash($senha, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":senha", $hashedpwd);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}