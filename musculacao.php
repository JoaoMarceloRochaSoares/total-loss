<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Musculação - Total Loss</title>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>

.musculacao-page{
    margin-top:8rem;
}

.hero-musculacao{
    min-height:70vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:8rem 9%;
    background:
    linear-gradient(rgba(0,0,0,.75),rgba(0,0,0,.75)),
    url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1920&auto=format&fit=crop');
    background-size:cover;
    background-position:center;
}

.hero-content span{
    color:rgb(238,87,51);
    font-size:2rem;
}

.hero-content h1{
    color:#fff;
    font-size:5rem;
    margin:2rem 0;
}

.hero-content p{
    color:#ddd;
    font-size:1.8rem;
    line-height:2;
    max-width:900px;
    margin:auto;
}

.muscle-section{
    padding:6rem 9%;
    background:#111;
}

.muscle-card{
    display:flex;
    align-items:center;
    gap:4rem;
    margin-bottom:8rem;
}

.muscle-card:nth-child(even){
    flex-direction:row-reverse;
}

.muscle-image{
    flex:1;
}

.muscle-image img{
    width:100%;
    height:450px;
    object-fit:cover;
    border-radius:1rem;
}

.muscle-content{
    flex:1;
}

.muscle-content span{
    color:rgb(238,87,51);
    font-size:1.8rem;
}

.muscle-content h2{
    color:#fff;
    font-size:3.8rem;
    margin:1rem 0;
}

.muscle-content p{
    color:#bbb;
    font-size:1.6rem;
    line-height:2;
}

.benefits{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:2rem;
    margin-top:3rem;
}

.benefit{
    background:#1a1a1a;
    padding:2rem;
    border-radius:1rem;
    border:1px solid #222;
}

.benefit h4{
    color:#fff;
    font-size:1.8rem;
    margin-bottom:.5rem;
}

.benefit p{
    color:#aaa;
    font-size:1.4rem;
}

.product-highlight{
    padding:6rem 9%;
    background:#1a1a1a;
}

.product-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:3rem;
    margin-top:4rem;
}

.product-box{
    background:#111;
    border-radius:1rem;
    overflow:hidden;
    transition:.3s;
    border:1px solid #222;
}

.product-box:hover{
    transform:translateY(-10px);
    border-color:rgb(238,87,51);
}

.product-box img{
    width:100%;
    height:250px;
    object-fit:cover;
}

.product-info{
    padding:2rem;
}

.product-info h3{
    color:#fff;
    font-size:2.2rem;
}

.product-info p{
    color:#aaa;
    font-size:1.5rem;
    margin-top:1rem;
}

.more-products{
    text-align:center;
    margin-top:4rem;
}

@media(max-width:991px){

.hero-content h1{
    font-size:3.8rem;
}

.muscle-card,
.muscle-card:nth-child(even){
    flex-direction:column;
}

.benefits{
    grid-template-columns:1fr;
}

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

<section class="hero-musculacao musculacao-page">

    <div class="hero-content">

        <span>Treino de Força</span>

        <h1>Musculação para Evolução Real</h1>

        <p>
            A musculação é uma das práticas mais eficientes para quem busca
            ganho de massa muscular, aumento de força, melhora da postura,
            definição corporal e mais qualidade de vida.
        </p>

    </div>

</section>

<section class="muscle-section">

    <div class="muscle-card">

        <div class="muscle-image">
            <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?q=80&w=1200">
        </div>

        <div class="muscle-content">

            <span>Hipertrofia</span>

            <h2>Construa Massa Muscular</h2>

            <p>
                A hipertrofia ocorre através da combinação entre treinamento,
                alimentação equilibrada e recuperação adequada.
            </p>

            <div class="benefits">

                <div class="benefit">
                    <h4>Mais força</h4>
                    <p>Evolução contínua.</p>
                </div>

                <div class="benefit">
                    <h4>Mais volume</h4>
                    <p>Desenvolvimento muscular.</p>
                </div>

                <div class="benefit">
                    <h4>Postura melhor</h4>
                    <p>Fortalecimento corporal.</p>
                </div>

                <div class="benefit">
                    <h4>Desempenho</h4>
                    <p>Mais rendimento nos treinos.</p>
                </div>

            </div>

        </div>

    </div>

    <div class="muscle-card">

        <div class="muscle-image">
            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=1200">
        </div>

        <div class="muscle-content">

            <span>Técnica Correta</span>

            <h2>Treine com Segurança</h2>

            <p>
                Uma boa execução ativa melhor a musculatura e reduz
                significativamente os riscos de lesões.
            </p>

        </div>

    </div>

    <div class="muscle-card">

        <div class="muscle-image">
            <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?q=80&w=1200">
        </div>

        <div class="muscle-content">

            <span>Consistência</span>

            <h2>Resultados Reais</h2>

            <p>
                A disciplina diária é o fator que mais influencia a evolução
                física ao longo do tempo.
            </p>

        </div>

    </div>

</section>

<section class="product-highlight">

    <h1 class="heading">
        <span>Produtos Recomendados</span>
    </h1>

    <div class="product-grid">

        <div class="product-box">
            <img src="https://images.unsplash.com/photo-1622484212850-eb596d769edc?q=80&w=1200">
            <div class="product-info">
                <h3>Whey Protein</h3>
                <p>Recuperação muscular e suporte para hipertrofia.</p>
            </div>
        </div>

        <div class="product-box">
            <img src="https://images.unsplash.com/photo-1605296867304-46d5465a13f1?q=80&w=1200">
            <div class="product-info">
                <h3>Hipercalórico</h3>
                <p>Ideal para quem busca aumento de peso e massa muscular.</p>
            </div>
        </div>

        <div class="product-box">
            <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=1200">
            <div class="product-info">
                <h3>Creatina</h3>
                <p>Mais força, energia e desempenho nos treinos.</p>
            </div>
        </div>

    </div>

    <div class="more-products">
        <a href="produtos.php" class="btn">Ver Mais Produtos</a>
    </div>

</section>

<script src="main.js"></script>

</body>
</html>