<?php
include __DIR__ . '/../conexao.php';
// Redireciona se já logado
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
if (isset($_SESSION['usuario_id'])) {
    header("Location: /index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="dec.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <title>Registro | Total Loss</title>
    </head>
<body>
    <?php include __DIR__ . '/../header.php'; ?>
    <div class="auth-wrapper">
    <form action="registro_action.php" method="POST">
        <div class="card">
            <div class="campo">
                <label for="nome">Nome</label>
                    <input type="text" name="nome" required id="nome" placeholder="Seu nome">
                <label for="senha">Senha</label>
                    <input type="password" name="senha" required minlength="8" id="senha" placeholder="Sua senha" autocomplete="new-password">
                <label for="confirmarSenha">Confirme sua senha</label>
                    <input type="password" name="confirmar_senha" required minlength="8" id="confirmarSenha" placeholder="Confirme sua senha" autocomplete="new-password">
            </div>
            <button type="submit">Registrar</button>
            <a href="/Login/login.php">Já possui conta?</a>
        </div>
    </form>
    </div>
    <div class="popup" id="popup" style="display:none;">
        <div class="card" id="popup-card">
            <div class="campo">
                <p id="popup-mensagem"></p>
            </div>
            <button type="button" onclick="window.location.href='/Login/login.php'">Login</button>
        </div>
    </div>
    <script src="registro.js"></script>
</body>
</html>
