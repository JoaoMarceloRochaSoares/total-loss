<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Treino Funcional | Total Loss</title>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>

.funcional-hero{
    margin-top:7rem;
    min-height:70vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:0 9%;
    background:
    linear-gradient(rgba(0,0,0,.75),rgba(0,0,0,.75)),
    url('https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=1920&auto=format&fit=crop');
    background-size:cover;
    background-position:center;
}

.funcional-hero .content{
    max-width:90rem;
}

.funcional-hero span{
    color:rgb(238,87,51);
    font-size:2rem;
}

.funcional-hero h1{
    color:#fff;
    font-size:6rem;
    margin:1.5rem 0;
}

.funcional-hero p{
    color:#ddd;
    font-size:1.8rem;
    line-height:2;
}

.funcional-info{
    background:#1a1a1a;
}

.funcional-container{
    display:flex;
    flex-wrap:wrap;
    align-items:center;
    gap:5rem;
}

.funcional-image{
    flex:1 1 40rem;
}

.funcional-image img{
    width:100%;
    border-radius:1rem;
}

.funcional-content{
    flex:1 1 45rem;
}

.funcional-content span{
    color:rgb(238,87,51);
    font-size:2rem;
}

.funcional-content h2{
    color:#fff;
    font-size:4rem;
    margin:1rem 0;
}

.funcional-content p{
    color:#ccc;
    font-size:1.6rem;
    line-height:2;
    margin-bottom:1.5rem;
}

</style>

</head>

<body>
    <header class="header">

    <a href="index.php" class="logo">
        <span>Total</span>Loss
    </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">

        <a href="index.php">Início</a>
        <a href="index.php#about">Sobre</a>
        <a href="index.php#features">Serviços</a>
        <a href="index.php#suppl">Suplementos</a>
        <a href="index.php#mar">Matérias</a>
        <a href="index.php#support">Suporte</a>

        <?php if($usuario_nome): ?>

            <a href="conta.php">
                <i class="fas fa-user-circle"></i>
                <?= htmlspecialchars($usuario_nome) ?>
            </a>

        <?php else: ?>

            <a href="Login/login.php">Login</a>

        <?php endif; ?>

    </nav>

</header>
<section class="funcional-hero">

    <div class="content">

        <span>TOTAL LOSS</span>

        <h1>Treino Funcional</h1>

        <p>
            O treino funcional trabalha movimentos naturais do corpo,
            melhorando força, resistência, equilíbrio, coordenação e
            condicionamento físico para o dia a dia.
        </p>

        <a href="#sobre" class="btn">
            Saiba Mais
        </a>

    </div>

</section>
<section class="funcional-info" id="sobre">

<section class="about">

<div class="funcional-container">

<div class="funcional-image">

<img src="https://assets-cdn.wellhub.com/images/mep-cms/Wellhub_Crossfit_05_fdc58ec758.jpg?w=1024&q=65">

</div>

<div class="funcional-content">

<span>COMO FUNCIONA</span>

<h2>O que é o Treino Funcional?</h2>

<p>
O treino funcional utiliza movimentos naturais como correr,
agachar, saltar, empurrar e puxar.
</p>

<p>
Ao contrário dos exercícios isolados, ele trabalha diversos
grupos musculares simultaneamente.
</p>

<p>
Isso proporciona mais gasto calórico, melhora da postura,
coordenação motora e condicionamento físico.
</p>

</div>

</div>

</section>

</section>