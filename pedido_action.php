<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['usuario_id'])) {
    echo json_encode(['sucesso' => false, 'erro' => 'Não autenticado']);
    exit;
}

require 'conexao.php';

$dados = json_decode(file_get_contents('php://input'), true);

if (!$dados || empty($dados['itens'])) {
    echo json_encode(['sucesso' => false, 'erro' => 'Dados inválidos']);
    exit;
}

$usuario_id      = $_SESSION['usuario_id'];
$total           = (float) $dados['total'];
$forma_pagamento = $dados['forma_pagamento'] ?? 'desconhecido';
$itens           = $dados['itens'];


$stmt = $conn->prepare("INSERT INTO pedidos (usuario_id, total, forma_pagamento) VALUES (?, ?, ?)");
$stmt->bind_param("ids", $usuario_id, $total, $forma_pagamento);

if (!$stmt->execute()) {
    echo json_encode(['sucesso' => false, 'erro' => 'Erro ao salvar pedido']);
    exit;
}

$pedido_id = $stmt->insert_id;


$stmt_item = $conn->prepare("INSERT INTO itens_pedido (pedido_id, nome_produto, quantidade, preco) VALUES (?, ?, ?, ?)");

foreach ($itens as $item) {
    $nome       = $item['name'];
    $quantidade = (int) $item['quantity'];
    $preco      = (float) $item['price'];
    $stmt_item->bind_param("isid", $pedido_id, $nome, $quantidade, $preco);
    $stmt_item->execute();
}

echo json_encode(['sucesso' => true]);
