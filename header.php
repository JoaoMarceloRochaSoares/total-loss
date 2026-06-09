<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>
<header class="header">
    <a href="/index.php" class="logo"><span>Total</span>Loss</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="/index.php">Início</a>
        <a href="/index.php#about">Sobre</a>
        <a href="/index.php#features">Serviços</a>
        <a href="/index.php#suppl">Suplementos</a>
        <a href="/index.php#mar">Matérias</a>
        <a href="/index.php#support">Suporte</a>
        <?php if ($usuario_nome): ?>
            <a href="/conta.php" style="color:#fff">
                <i class="fas fa-user-circle" style="margin-right:.4rem"></i><?= htmlspecialchars($usuario_nome) ?>
            </a>
        <?php else: ?>
            <a href="/Login/login.php">Login</a>
        <?php endif; ?>
    </nav>
</header>
