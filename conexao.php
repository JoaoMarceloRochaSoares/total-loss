<?php
$host    = getenv('DB_HOST')    ?: 'mainline.proxy.rlwy.net';
$usuario = getenv('DB_USER')    ?: 'root';
$senha   = getenv('DB_PASS')    ?: 'EZABcUgMnavABXzeBBoxxIjoxbCKkQla';
$banco   = getenv('DB_NAME')    ?: 'railway';
$porta   = (int)(getenv('DB_PORT') ?: 26703);

$conn = mysqli_connect($host, $usuario, $senha, $banco, $porta);

if (!$conn) {
    http_response_code(500);
    die(json_encode(['sucesso' => false, 'mensagem' => 'Erro na conexão com o banco de dados.']));
}

mysqli_set_charset($conn, 'utf8mb4');
