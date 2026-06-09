<?php
/**
 * session.php — Inicializa a sessão com duração de 30 dias.
 * Inclua este arquivo no TOPO de qualquer página que precise
 * verificar autenticação ANTES de emitir HTML.
 * O header.php já inclui este arquivo automaticamente.
 */
if (session_status() === PHP_SESSION_NONE) {
    $sessao_duracao = 60 * 60 * 24 * 30; // 30 dias
    ini_set('session.gc_maxlifetime', $sessao_duracao);
    ini_set('session.cookie_lifetime', $sessao_duracao);
    session_set_cookie_params([
        'lifetime' => $sessao_duracao,
        'path'     => '/',
        'secure'   => false,   // mude para true em produção com HTTPS
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
