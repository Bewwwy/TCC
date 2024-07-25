<?php

declare(strict_types=1);

function set_pet(object $pdo, int $id, string $nome_pet, string $idade, string $sexo, string $descr) {
    $query = "UPDATE tb_animal SET nome_pet = :nome_pet, idade = :idade, sexo = :sexo, descr = :descr WHERE ID_pet = :id;";

    $stmt = $pdo->prepare($query);


    $stmt->bindParam(":nome_pet", $nome_pet);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":sexo", $sexo);
    $stmt->bindParam(":descr", $descr);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}