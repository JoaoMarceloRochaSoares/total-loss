<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "logindojohnson";

$conn = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>