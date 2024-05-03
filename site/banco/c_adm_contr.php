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


// Valida o e-mail
// function is_email_invalid(string $email) {
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         return true;
//     } else {
//         return false;
//     }
// }

// Checa se o usuário já existe
function is_username_taken(object $pdo, string $user) {
    if (get_username($pdo, $user)) {
        return true;
    } else {
        return false;
    }
}


// Checa se o email já está sendo usado
// function is_email_registered(object $pdo, string $email) {
//     if (get_email($pdo, $email)) {
//         return true;
//     } else {
//         return false;
//     }
// }

function create_user(object $pdo, string $nome, string $user, string $senha) {
    set_user($pdo, $nome, $user, $senha);
}