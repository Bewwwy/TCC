<?php

declare(strict_types=1);


function set_form(object $pdo, int $id, string $nome, string $idade, string $email, string $numero, string $cpf, string $cep) {
    $query = "INSERT INTO tb_f_adocao(ID_pet, nome_completo, idade, CPF, CEP, email, numero) VALUES (:ID_pet, :nome, :idade, :cpf, :cep, :email, :numero);";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":ID_pet", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":cpf", $cpf);
    $stmt->bindParam(":cep", $cep);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":numero", $numero);
    $stmt->execute();
}
