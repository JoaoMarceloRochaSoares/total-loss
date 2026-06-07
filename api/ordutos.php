<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$host = "mysql.railway.internal";
$usuario = "root";
$senha = "EZABcUgMnavABXzeBBoxxIjoxbCKkQla";
$banco = "railway";
$porta = 3306;

$conn = mysqli_connect($host, $usuario, $senha, $banco, $porta);

if (!$conn) {
    echo json_encode(["erro" => "Conexão falhou"]);
    exit;
}

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conn, $sql);

$produtos = [];
while ($row = mysqli_fetch_assoc($resultado)) {
    $produtos[] = $row;
}

echo json_encode($produtos);
mysqli_close($conn);
?>