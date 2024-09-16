<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/excl.css">
    <title>Excluir ADM</title>
</head>
<body>
    <div class="q">
        <?php

        $id = $_GET['id'];

        try {
            require_once "../../conexao.php";

            echo "<p>Tem certeza de que deseja excluir esta mensagem?</p>";
            echo "<p>ID do pedido = ". $id ." </p>";
            echo "<form method='post'>";
            echo "<div class='btns'><button type='submit' name='excl' id='excl'>Excluir</button>";
            echo "<button type='submit' name='cancel' id='canc'>Cancelar</button></div>";
            echo "</form></div>";


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
                
        ?>


</body>
</html>