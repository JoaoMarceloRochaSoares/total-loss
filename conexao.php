<?php
$host = "mainline.proxy.rlwy.net";
$usuario = "root";
$senha = "EZABcUgMnavABXzeBBoxxIjoxbCKkQla";
$banco = "railway";
$porta = 26703;

$conn = mysqli_connect($host, $usuario, $senha, $banco, $porta);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>