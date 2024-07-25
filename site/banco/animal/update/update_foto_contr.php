<?php

declare(strict_types=1);


function update_pet(object $pdo, int $id, string $foto_novo_nome) {
    set_pet($pdo, $id, $foto_novo_nome);
}