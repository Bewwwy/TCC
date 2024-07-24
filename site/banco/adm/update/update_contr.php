<?php

declare(strict_types=1);


// Checa se os campos estão vazios
function is_input_empty(string $nome, string $user, string $senha) {
    if (empty($nome) || empty($user) || empty($senha)) {
        return true;
    } else {
        return false;
    }
}

function update_user(object $pdo, int $id, string $nome, string $senha) {
    set_user($pdo, $id, $nome, $senha);
}
