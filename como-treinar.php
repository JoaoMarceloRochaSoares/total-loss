<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Como Treinar Corretamente | Total Loss</title>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

<header class="header">

    <a href="index.php" class="logo">
        <span>Total</span>Loss
    </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">

        <a href="index.php">Início</a>
        <a href="#importancia">Importância</a>
        <a href="#erros">Erros Comuns</a>
        <a href="#funcional">Treino Funcional</a>

        <?php if ($usuario_nome): ?>
            <a href="conta.php">
                <i class="fas fa-user-circle"></i>
                <?= htmlspecialchars($usuario_nome) ?>
            </a>
        <?php else: ?>
            <a href="Login/login.php">Login</a>
        <?php endif; ?>

    </nav>

</header>

<section class="banner" style="
margin-top:7rem;
background:
linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.75)),
url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=1920&auto=format&fit=crop')
center/cover;">

    <span>Guia Completo</span>

    <h3>Como Treinar Corretamente</h3>

    <p>
        Aprenda a melhorar seus resultados utilizando
        técnica, disciplina e recuperação adequada.
    </p>

</section>

<section id="importancia" class="about">

    <div class="image">
        <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?q=80&w=800">
    </div>

    <div class="content">

        <span>Execução Correta</span>

        <h3 class="title">
            Treinar melhor vale mais do que treinar mais pesado
        </h3>

        <p>
            A técnica correta aumenta a ativação muscular,
            melhora os resultados e reduz o risco de lesões.
        </p>

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-check"></i> Mais ativação</h3>
                <p>Melhor estímulo muscular.</p>
            </div>

            <div class="box">
                <h3><i class="fas fa-check"></i> Menos lesões</h3>
                <p>Maior segurança.</p>
            </div>

            <div class="box">
                <h3><i class="fas fa-check"></i> Melhor desempenho</h3>
                <p>Treinos mais eficientes.</p>
            </div>

            <div class="box">
                <h3><i class="fas fa-check"></i> Mais resultados</h3>
                <p>Evolução consistente.</p>
            </div>

        </div>

    </div>

</section>

<section id="erros" class="features">

    <h1 class="heading">
        <span>Erros Mais Comuns</span>
    </h1>

    <div class="box-container">

        <div class="box">

            <div class="image">
                <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=800">
            </div>

            <div class="content">
                <h3>Carga Excessiva</h3>
                <p>Priorize a execução antes do peso.</p>
            </div>

        </div>

        <div class="box">

            <div class="image">
                <img src="https://images.unsplash.com/photo-1599058917765-a780eda07a3e?q=80&w=800">
            </div>

            <div class="content">
                <h3>Sem Aquecimento</h3>
                <p>Prepare o corpo antes de treinar.</p>
            </div>

        </div>

        <div class="box">

            <div class="image">
                <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?q=80&w=800">
            </div>

            <div class="content">
                <h3>Pouco Descanso</h3>
                <p>Os músculos crescem na recuperação.</p>
            </div>

        </div>

    </div>

</section>

<section id="funcional" class="materias">

    <h1 class="heading">
        <span>Treino Funcional</span>
    </h1>

    <div class="box-container">

        <div class="box">

            <img src="https://revistaoeste.com/oestegeral/wp-content/uploads/2025/05/treino-em-casa_1748353704086-1024x576.jpg">

            <div class="content">
                <h3>Mais Recrutamento Muscular</h3>
                <p>Movimentos completos e eficientes.</p>
            </div>

        </div>

        <div class="box">

            <img src="https://images.unsplash.com/photo-1549060279-7e168fcee0c2?q=80&w=800">

            <div class="content">
                <h3>Core Forte</h3>
                <p>Mais estabilidade e equilíbrio.</p>
            </div>

        </div>

        <div class="box">

            <img src="https://images.unsplash.com/photo-1534367610401-9f5ed68180aa?q=80&w=800">

            <div class="content">
                <h3>Potência</h3>
                <p>Melhor desempenho nos exercícios.</p>
            </div>

        </div>

    </div>

</section>

<section class="banner">

    <span>Total Loss</span>

    <h3>Treine com Inteligência</h3>

    <p>
        A técnica correta acelera resultados e
        aumenta a segurança durante os treinos.
    </p>

    <a href="index.php" class="btn">
        Voltar ao Início
    </a>

</section>

<script src="main.js"></script>

</body>
</html>
```
