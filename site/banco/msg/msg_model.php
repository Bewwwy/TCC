<?php

declare(strict_types=1);

function set_form(object $pdo, string $nome, string $email, string $msg) {
    $query = "INSERT INTO tb_msg(nome_completo, email, msg) VALUES (:nome, :email, :msg);";

    $stmt = $pdo->prepare($query);


    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":msg", $msg);
    $stmt->execute();
}