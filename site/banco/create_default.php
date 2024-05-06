<?php

declare(strict_types=1);

require_once "conexao.php";


$n = 'abc';
$default = 'adm';
$s = 'pataseamigos';


function create_default(object $pdo, string $n, string $default, string $s) {
    $query = "INSERT INTO tb_adm(nome, user, senha) SELECT * FROM(SELECT :nome, :user, :senha) AS tmp WHERE NOT EXISTS (SELECT user FROM tb_adm WHERE user = 'adm') LIMIT 1;";
    
    $stmt = $pdo->prepare($query);

    $options = ["cost" => 12];
    $hashedpwd = password_hash($s, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":nome", $n);
    $stmt->bindParam(":user", $default);
    $stmt->bindParam(":senha", $hashedpwd);
    $stmt->execute();
}

create_default($pdo, $n, $default, $s);