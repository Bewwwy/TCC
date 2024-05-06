<?php

declare(strict_types=1);


// Checa se os campos estão vazios
function is_input_empty(string $user, string $senha) {
    if (empty($user) || empty($senha)) {
        return true;
    } else {
        return false;
    }
}

function is_user_wrong(bool|array $result){
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $senha, string $hashedpwd){
    if (!password_verify($senha, $hashedpwd)) {
        return true;
    } else {
        return false;
    }
}