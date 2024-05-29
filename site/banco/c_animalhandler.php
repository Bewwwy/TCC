<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foto = $_FILES['foto'];

    $foto_nome = $_FILES['foto']['name'];
    $foto_tmpname = $_FILES['foto']['tmp_name'];
    $foto_size = $_FILES['foto']['size'];
    $foto_error = $_FILES['foto']['error'];
    $foto_type = $_FILES['foto']['type'];
}