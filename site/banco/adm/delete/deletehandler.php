<?php

$id = $_GET['id'];

try {
    require_once "../../conexao.php";

    echo "<p>Tem certeza de que deseja excluir este ADM?</p>";
    echo "<p>ID = ". $id ." </p>";
    echo "<form method='post'>";
    echo "<button type='submit' name='excl'>Excluir</button>";
    echo "<button type='submit' name='cancel'>Cancelar</button>";
    echo "</form>";


    if(isset($_POST['excl'])) {
        $query = "DELETE FROM tb_adm WHERE ID_adm=" . $_GET["id"] .";";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        echo "Exlcuido com sucesso.";
        echo "<a href='../../../pages/CRUDADMs.php'>Voltar</a>";

    } elseif (isset($_POST['cancel'])) {
        header("Location: ../../../pages/CRUDADMs.php");
    }

} catch (PDOException $e) {
    die("Query failed; " . $e->getMessage());
}