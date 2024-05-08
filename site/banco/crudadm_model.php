<?php

declare(strict_types=1);

require_once '../banco/conexao.php';





$query = "SELECT * FROM tb_adm ORDER BY ID_adm;";

$stmt = $pdo->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll();


foreach($result as $row) {
    echo "<tr>";
    echo "<td>". $row['ID_adm'] . "</th>";
    echo "<td>$nome</th>";
    echo "<td>$user</th>";
    echo "<td>$senha</th>";
    echo"</tr>"; 
}
