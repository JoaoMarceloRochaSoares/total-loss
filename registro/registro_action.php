<?php
ob_start();
session_start();
include '../conexao.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Método inválido.']);
    exit;
}

$nome            = trim($_POST['nome'] ?? '');
$senha           = $_POST['senha'] ?? '';
$confirmar_senha = $_POST['confirmar_senha'] ?? '';

if ($nome === '' || $senha === '' || $confirmar_senha === '') {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Preencha todos os campos.']);
    exit;
}

if ($senha !== $confirmar_senha) {
    echo json_encode(['sucesso' => false, 'mensagem' => 'As senhas não coincidem!']);
    exit;
}

if (strlen($senha) < 8) {
    echo json_encode(['sucesso' => false, 'mensagem' => 'A senha deve ter pelo menos 8 caracteres.']);
    exit;
}

$verificar = $conn->prepare("SELECT id FROM usuarios WHERE BINARY nome = ?");
if (!$verificar) {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Erro interno. Tente novamente.']);
    exit;
}
$verificar->bind_param("s", $nome);
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows > 0) {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Nome já cadastrado!']);
    exit;
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
$sql = $conn->prepare("INSERT INTO usuarios (nome, senha) VALUES (?, ?)");
$sql->bind_param("ss", $nome, $senha_hash);

if ($sql->execute()) {
    session_regenerate_id(true);
    $_SESSION['usuario_id']   = $conn->insert_id;
    $_SESSION['usuario_nome'] = $nome;
    echo json_encode(['sucesso' => true]);
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Erro ao registrar. Tente novamente.']);
}

ob_end_flush();
