<?php
ob_start();
$sessao_duracao = 60 * 60 * 24 * 30;
ini_set('session.gc_maxlifetime', $sessao_duracao);
ini_set('session.cookie_lifetime', $sessao_duracao);
session_set_cookie_params([
    'lifetime' => $sessao_duracao,
    'path'     => '/',
    'secure'   => false,
    'httponly' => true,
    'samesite' => 'Lax',
]);
session_start();
include __DIR__ . '/../conexao.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Método inválido.']);
    exit;
}

$nome  = trim($_POST['nome'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($nome === '' || $senha === '') {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Preencha todos os campos.']);
    exit;
}

$sql = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE BINARY nome = ?");
if (!$sql) {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Erro interno. Tente novamente.']);
    exit;
}

$sql->bind_param("s", $nome);
$sql->execute();
$resultado = $sql->get_result();
$usuario   = $resultado->fetch_assoc();

if ($usuario && password_verify($senha, $usuario['senha'])) {
    session_regenerate_id(true);
    $_SESSION['usuario_id']   = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    echo json_encode(['sucesso' => true]);
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Nome ou senha incorretos!']);
}

ob_end_flush();
