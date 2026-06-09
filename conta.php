<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: /Login/login.php");
    exit;
}
$usuario_nome = $_SESSION['usuario_nome'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha Conta – Total Loss</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="main.css">
    <style>
        .conta-section {
            min-height: 80vh;
            padding: 10rem 2rem 4rem;
            max-width: 900px;
            margin: 0 auto;
        }
        .conta-section h2 {
            font-size: 2.8rem;
            color: var(--white);
            margin-bottom: .4rem;
        }
        .conta-section h2 { color: var(--white); }
        .conta-section h2 span { color: var(--green); }
        .conta-tabs {
            display: flex;
            gap: 1rem;
            margin: 2.5rem 0 2rem;
            border-bottom: 2px solid #333;
            padding-bottom: .8rem;
        }
        .conta-tabs button {
            background: none;
            border: none;
            color: #aaa;
            font-size: 1.5rem;
            cursor: pointer;
            padding: .5rem 1.2rem;
            border-radius: .5rem .5rem 0 0;
            transition: .2s;
        }
        .conta-tabs button.ativo {
            color: rgb(238, 87, 51);
            border-bottom: 3px solid rgb(238, 87, 51);
        }
        .tab-conteudo { display: none; }
        .tab-conteudo.ativo { display: block; }
        .pedidos-vazio {
            text-align: center;
            padding: 5rem 0;
            color: #aaa;
        }
        .pedidos-vazio i {
            font-size: 5rem;
            margin-bottom: 1.5rem;
            color: #333;
        }
        .pedidos-vazio p { font-size: 1.6rem; }
        .pedidos-vazio a {
            display: inline-block;
            margin-top: 1.5rem;
            padding: .8rem 2.5rem;
            background: var(--green);
            color: #111;
            font-weight: bold;
            border-radius: .5rem;
            text-decoration: none;
            font-size: 1.4rem;
        }
        .btn-sair {
            margin-top: 3rem;
            display: inline-block;
            padding: .7rem 2rem;
            background: transparent;
            border: 2px solid #e74c3c;
            color: #e74c3c;
            border-radius: .5rem;
            font-size: 1.4rem;
            cursor: pointer;
            text-decoration: none;
            transition: .2s;
        }
        .btn-sair:hover { background: #e74c3c; color: #fff; }
    </style>
</head>
<body>

<header class="header">
    <a href="/index.php" class="logo"><span>Total</span>Loss</a>
    <div id="menu-btn" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="/index.php#home">Início</a>
        <a href="/index.php#about">Sobre</a>
        <a href="/index.php#features">Serviços</a>
        <a href="/index.php#suppl">Suplementos</a>
        <a href="/index.php#mar">Matérias</a>
        <a href="/index.php#support">Suporte</a>
        <a href="/conta.php" style="color:var(--green)">
            <i class="fas fa-user-circle" style="margin-right:.4rem"></i><?= htmlspecialchars($usuario_nome) ?>
        </a>
    </nav>
</header>

<section class="conta-section">
    <h2>Olá, <span><?= htmlspecialchars($usuario_nome) ?></span></h2>

    <div class="conta-tabs">
        <button class="ativo" onclick="trocarTab('pedidos', this)">
            <i class="fas fa-box"></i> Meus Pedidos
        </button>
    </div>

    <div id="tab-pedidos" class="tab-conteudo ativo">
        <div class="pedidos-vazio">
            <i class="fas fa-shopping-bag"></i>
            <p>Você ainda não fez nenhum pedido.</p>
            <a href="/produtos.html">Ver Produtos</a>
        </div>
    </div>

    <a href="/logout.php" class="btn-sair">
        <i class="fas fa-sign-out-alt"></i> Sair
    </a>
</section>

<script>
function trocarTab(id, btn) {
    document.querySelectorAll('.tab-conteudo').forEach(t => t.classList.remove('ativo'));
    document.querySelectorAll('.conta-tabs button').forEach(b => b.classList.remove('ativo'));
    document.getElementById('tab-' + id).classList.add('ativo');
    btn.classList.add('ativo');
}
const menuBtn = document.querySelector('#menu-btn');
const navbar  = document.querySelector('.navbar');
if (menuBtn) {
    menuBtn.onclick = () => {
        menuBtn.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    };
}
</script>
</body>
</html>
