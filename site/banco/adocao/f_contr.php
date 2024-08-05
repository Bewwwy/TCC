<?php

declare(strict_types=1);


// Checa se os campos estão vazios
function is_input_empty(string $nome, int $idade, string $email, int $numero, int $cpf, int $cep, bool $check) {
    if (empty($nome) || empty($idade) || empty($email) || empty($numero) || empty($cpf) || empty($cep) || isset($check)) {
        return true;
    } else {
        return false;
    }
}
