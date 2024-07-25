<?php

declare(strict_types=1);

function set_pet(object $pdo, int $id, string $foto_novo_nome) {
    $query = "UPDATE tb_animal SET foto = :foto WHERE ID_pet = :id;";

    $stmt = $pdo->prepare($query);


    $stmt->bindParam(":foto", $foto_novo_nome);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}