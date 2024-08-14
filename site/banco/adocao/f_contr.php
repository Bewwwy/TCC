<?php

declare(strict_types=1);


// Checa se os campos estão vazios
function is_input_empty(string $nome, string $email, string $idade, int $cpf, int $cep, int $numero, bool $check) {
    if (empty($nome) || empty($email) || empty($idade) || empty($cpf) || empty($cep) || empty($numero) || isset($check)) {
        return true;
    } else {
        return false;
    }
}
