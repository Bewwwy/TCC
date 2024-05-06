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

// function get_email(object $pdo, string $email) {
//     $query = "SELECT user FROM tb_adm WHERE email = :email;";

//     $stmt = $pdo->prepare($query);
//     $stmt->bindParam(":email", $email);
//     $stmt->execute();

//     $result = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $result;
// }


function set_user(object $pdo, string $nome, string $user, string $senha) {
    $query = "INSERT INTO tb_adm(nome, user, senha) VALUES (:nome, :user, :senha);";

    $stmt = $pdo->prepare($query);

    $options = ["cost" => 12];
    $hashedpwd = password_hash($senha, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":user", $user);
    $stmt->bindParam(":senha", $hashedpwd);
    $stmt->execute();
}

