<?php

declare(strict_types=1);


// Checa se os campos estão vazios
function is_input_empty(string $nome_pet, string $idade, string $sexo, string $descr) {
    if (empty($nome_pet) || empty($idade) || empty($sexo) || empty($descr)) {
        return true;
    } else {
        return false;
    }
}

// atualiza o pet
function update_pet(object $pdo, int $id, string $nome_pet, string $idade, string $sexo, string $descr) {
    set_pet($pdo, $id, $nome_pet, $idade, $sexo, $descr);
}
