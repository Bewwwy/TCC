<?php

declare(strict_types=1);


// Checa se os campos estão vazios
function is_input_empty(string $nome_pet, int $idade, string $sexo, string $descr) {
    if (empty($nome_pet) || empty($idade) || empty($sexo) || empty($descr)) {
        return true;
    } else {
        return false;
    }
}

function create_pet(object $pdo, string $nome_pet, string $foto_novo_nome, int $idade, string $sexo, string $descr ) {
    set_pet($pdo, $nome_pet, $foto_novo_nome, $idade, $sexo, $descr);
}