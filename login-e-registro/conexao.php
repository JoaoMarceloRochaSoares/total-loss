<?php
$host = "sql301.infinityfree.com";
$usuario = "if0_42110172";
$senha = "hE0Vmknybl1";
$banco = "if0_42110172_total_loss";

$conn = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>