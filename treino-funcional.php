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
    background:
    linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),
    url('https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=1920&auto=format&fit=crop')
    center/cover;

    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
}

.funcional-hero .content{
    max-width:80rem;
}

.funcional-hero span{
    color:rgb(238,87,51);
    font-size:2rem;
}

.funcional-hero h1{
    color:#fff;
    font-size:6rem;
    margin:1rem 0;
}

.funcional-hero p{
    color:#ddd;
    font-size:1.8rem;
    line-height:1.8;
}

.funcional-info{
    background:#1a1a1a;
}

.funcional-info .container{
    display:flex;
    flex-wrap:wrap;
    gap:5rem;
    align-items:center;
}

.funcional-info .image{
    flex:1 1 40rem;
}

.funcional-info .image img{
    width:100%;
    border-radius:1rem;
}

.funcional-info .content{
    flex:1 1 45rem;
}

.funcional-info .content h2{
    color:#fff;
    font-size:4rem;
    margin-bottom:2rem;
}

.funcional-info .content p{
    color:#ccc;
    font-size:1.7rem;
    line-height:2;
    margin-bottom:1.5rem;
}

.beneficios{
    background:#111;
}

.beneficios-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(28rem,1fr));
    gap:3rem;
}
.beneficio-card{
    background:#1a1a1a;
    border:1px solid #333;
    border-radius:1rem;
    padding:3rem;
    transition:.3s;
}

.beneficio-card:hover{
    transform:translateY(-10px);
    border-color:rgb(238,87,51);
}

.beneficio-card i{
    font-size:4rem;
    color:rgb(238,87,51);
    margin-bottom:2rem;
}

.beneficio-card h3{
    color:#fff;
    font-size:2.2rem;
    margin-bottom:1rem;
}

.beneficio-card p{
    color:#aaa;
    font-size:1.5rem;
    line-height:1.8;
}

.massa-muscular{
    background:#1a1a1a;
}

.massa-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(30rem,1fr));
    gap:3rem;
}

.massa-card{
    background:#111;
    border:1px solid #333;
    border-radius:1rem;
    padding:3rem;
    transition:.3s;
}

.massa-card:hover{
    border-color:rgb(238,87,51);
    box-shadow:0 0 20px rgba(238,87,51,.2);
}

.massa-card h3{
    color:#fff;
    font-size:2.2rem;
    margin-bottom:1rem;
}

.massa-card p{
    color:#aaa;
    font-size:1.5rem;
    line-height:1.9;
}

.destaque{
    background:
    linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)),
    url('https://pro3academia.com.br/wp-content/uploads/2024/12/Capa-Blog-Post-13-768x576.png')
    center/cover;

    text-align:center;
}

.destaque h2{
    color:#fff;
    font-size:4rem;
}

.destaque p{
    color:#ddd;
    font-size:1.8rem;
    max-width:80rem;
    margin:2rem auto;
    line-height:2;
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
            O treino funcional utiliza movimentos naturais do corpo para desenvolver
            força, resistência, mobilidade, equilíbrio e coordenação.
        </p>

        <a href="#sobre" class="btn">
            Saiba Mais
        </a>

    </div>

</section>

<section class="funcional-info" id="sobre">

    <div class="container">

        <div class="image">
            <img src="https://assets-cdn.wellhub.com/images/mep-cms/Wellhub_Crossfit_05_fdc58ec758.jpg?w=1024&q=65">
        </div>

        <div class="content">

            <span style="color:rgb(238,87,51);font-size:2rem;">
                COMO FUNCIONA
            </span>

            <h2>O que é o Treino Funcional?</h2>

            <p>
                O treino funcional é baseado em movimentos que simulam ações do dia a dia.
            </p>

            <p>
                Trabalha vários grupos musculares simultaneamente.
            </p>

            <p>
                Promove condicionamento físico e maior gasto calórico.
            </p>

        </div>

    </div>

</section>
<section class="beneficios">
...
</section>

<section class="massa-muscular">
...
</section>

<section class="destaque">
...
</section>

<footer class="footer">
...
</footer>

</body>
</html>