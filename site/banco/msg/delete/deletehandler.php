<?php

$id = $_GET['id'];

try {
    require_once "../../conexao.php";

    echo "<p>Tem certeza de que deseja excluir este pedido?</p>";
    echo "<p>ID do pedido = ". $id ." </p>";
    echo "<form method='post'>";
    echo "<button type='submit' name='excl'>Excluir</button>";
    echo "<button type='submit' name='cancel'>Cancelar</button>";
    echo "</form>";


    if(isset($_POST['excl'])) {
        $query = "DELETE FROM tb_msg WHERE ID_msg=" . $id .";";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        echo "Exlcuido com sucesso.";
        echo "<a href='../../../pages/mensagens.php'>Voltar</a>";

    } elseif (isset($_POST['cancel'])) {
        header("Location: ../../../pages/mensagens.php");
    }

} catch (PDOException $e) {
    die("Query failed; " . $e->getMessage());
}