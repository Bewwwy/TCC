<?php

declare(strict_types=1);

function get_adms(object $pdo) {
    $query = "SELECT * FROM tb_adm ORDER BY ID_adm;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function display_adms() {
    while($linha = get_adms($result)) {
        $id = $linha['ID_adm'];
        $nome = $linha['nome'];
        $user = $linha['user'];
        $senha = $linha['senha'];

        echo "<tr>";
        echo "<td width='100' align='right'>$id</th>";
        echo "<td width='300' align='left'>$nome</th>";
        echo "<td width='100' align='left'>$user</th>";
        echo "<td width='250' align='left'>$senha</th>";
        echo"</tr>"; 
    }
}