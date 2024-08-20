<?php

declare(strict_types=1);

function is_input_empty(string $nome, string $email, string $msg) {
    if (empty($nome) || empty($email) || empty($msg)) {
        return true;
    } else {
        return false;
    }
}

function send_form(object $pdo, string $nome, string $email, string $msg) {
    set_form($pdo, $nome, $email, $msg);
}
