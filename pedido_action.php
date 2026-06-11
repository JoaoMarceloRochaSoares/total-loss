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
$status          = 'pendente';

$stmt = $conn->prepare("INSERT INTO pedidos (usuario_id, total, forma_pagamento, status) VALUES (?, ?, ?, ?)");
$stmt->bind_param("idss", $usuario_id, $total, $forma_pagamento, $status);

if (!$stmt->execute()) {
    echo json_encode(['sucesso' => false, 'erro' => 'Erro ao salvar pedido: ' . $stmt->error]);
    exit;
}

$pedido_id = $stmt->insert_id;

$stmt_item = $conn->prepare("INSERT INTO itens_pedido (pedido_id, nome_produto, quantidade, preco) VALUES (?, ?, ?, ?)");

foreach ($itens as $item) {
    $nome       = $item['name'];
    $quantidade = (int) $item['quantity'];
    $preco      = (float) $item['price'];
    $stmt_item->bind_param("isid", $pedido_id, $nome, $quantidade, $preco);
    if (!$stmt_item->execute()) {
        // log silencioso, não interrompe o fluxo
        error_log('Erro ao salvar item: ' . $stmt_item->error);
    }
}

echo json_encode(['sucesso' => true]);
