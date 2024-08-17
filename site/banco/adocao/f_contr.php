<?php

declare(strict_types=1);


// Checa se os campos estão vazios
function is_input_empty(string $nome, string $email, string $idade, string $cpf, string $cep, string $numero, bool $check) {
    if (empty($nome) || empty($email) || empty($idade) || empty($cpf) || empty($cep) || empty($numero) || empty($check)) {
        return true;
    } else {
        return false;
    }
}

function send_form(object $pdo, int $id, string $nome, string $idade, string $email, string $numero, string $cpf, string $cep) {
    set_form($pdo, $id, $nome, $idade, $email, $numero, $cpf, $cep);
}