<?php

require_once "conexao.php";


function display_adms($pdo) {

    $query = "SELECT * FROM tb_adm ORDER BY ID_adm;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();


    foreach($result as $row) {
        echo "<tr>";
        echo "<td>". $row['id'] . "</th>";
        echo "<td>$nome</th>";
        echo "<td>$user</th>";
        echo "<td>$senha</th>";
        echo"</tr>"; 
    }

}
