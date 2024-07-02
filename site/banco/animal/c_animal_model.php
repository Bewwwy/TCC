<?php

declare(strict_types=1);

function set_pet(object $pdo, string $nome_pet, string $foto_novo_nome, int $idade, string $sexo, string $descr ) {
    $query = "INSERT INTO tb_animal(nome_pet, foto, idade, sexo, descr) VALUES (:nome_pet, :foto, :idade, :sexo, :descr);";

    $stmt = $pdo->prepare($query);


    $stmt->bindParam(":nome_pet", $nome_pet);
    $stmt->bindParam(":foto", $foto_novo_nome);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":sexo", $sexo);
    $stmt->bindParam(":descr", $descr);
    $stmt->execute();
}