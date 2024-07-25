<?php

$id = $_GET['id'];

try {
    require_once "../../conexao.php";

    echo "<p>Tem certeza de que deseja excluir este animal?</p>";
    echo "<p>ID do animal = ". $id ." </p>";
    echo "<form method='post'>";
    echo "<button type='submit' name='excl'>Excluir</button>";
    echo "<button type='submit' name='cancel'>Cancelar</button>";
    echo "</form>";


    if(isset($_POST['excl'])) {
        $query = "DELETE FROM tb_animal WHERE ID_pet=" . $id .";";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        echo "Exlcuido com sucesso.";
        echo "<a href='../../../pages/CRUDanimais.php'>Voltar</a>";

    } elseif (isset($_POST['cancel'])) {
        header("Location: ../../../pages/CRUDanimais.php");
    }

} catch (PDOException $e) {
    die("Query failed; " . $e->getMessage());
}