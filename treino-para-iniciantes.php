<?php
session_start();

$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Treino para Iniciantes</title>

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Nunito',sans-serif;
}

body{
    background:#050505;
    color:#fff;
}

/* HERO */

.hero{
    min-height:55vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;

    background:
    linear-gradient(rgba(0,0,0,.75),rgba(0,0,0,.75)),
    url('https://opengym.com.br/blog/wp-content/uploads/2025/07/Treino-avulso-para-emagrecer-indo-na-academia-2x-por-semana.webp')
    center/cover;
}

.hero-content{
    max-width:900px;
    padding:20px;
}

.hero span{
    color:#ff5722;
    font-size:1.2rem;
    font-weight:700;
}

.hero h1{
    font-size:4rem;
    margin:15px 0;
}

.hero p{
    color:#ccc;
    font-size:1.1rem;
    line-height:1.8;
}

.btn{
    display:inline-block;
    margin-top:30px;
    padding:14px 40px;
    background:#ff5722;
    color:white;
    text-decoration:none;
    font-weight:700;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-3px);
}

.section-title{
    text-align:center;
    margin:80px 0 50px;
}

.section-title span{
    color:#ff5722;
    font-size:1.1rem;
}

.section-title h2{
    font-size:3rem;
    margin-top:10px;
}

.cards-grid{
    width:90%;
    max-width:1400px;
    margin:auto;

    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:30px;
    margin-bottom:35px;
}

.card{
    background:#0d0d0d;
    border:1px solid #222;
    border-radius:15px;
    overflow:hidden;
    transition:.35s;
}

.card:hover{
    transform:translateY(-10px);
    border-color:#ff5722;
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-content{
    padding:25px;
}

.card ul{
    list-style:none;
}

.card li{
    color:#bbb;
    padding:8px 0;
    border-bottom:1px solid #1a1a1a;
}

.card li:last-child{
    border:none;
}

.info{
    width:90%;
    max-width:1000px;
    margin:100px auto;
    text-align:center;
}

.info span{
    color:#ff5722;
    font-size:1.1rem;
}

.info h2{
    font-size:3rem;
    margin:15px 0;
}

.info p{
    color:#bbb;
    line-height:1.8;
}

footer{
    padding:40px;
    text-align:center;
    color:#777;
    border-top:1px solid #222;
}

@media(max-width:768px){

.hero h1{
    font-size:2.5rem;
}

.section-title h2{
    font-size:2rem;
}

.info h2{
    font-size:2rem;
}

}

</style>
</head>
<body>

<section class="hero">

    <div class="hero-content">

        <span>COMECE HOJE • EVOLUA SEMPRE</span>

        <h1>Treino para Iniciantes</h1>

        <p>
            Escolha uma rotina adequada ao seu objetivo.
            Desenvolva força, resistência, condicionamento
            e aprenda os fundamentos da musculação.
        </p>

        <a href="#treinos" class="btn">Ver Treinos</a>

<a href="index.php#mar" class="btn" style="margin-left:10px;">
    Voltar às Matérias
</a>

    </div>

</section>

<div class="section-title" id="treinos">

    <span>ROTINAS DE TREINO</span>
    <h2>Escolha Seu Treino</h2>

</div>
<div class="cards-grid">

    <div class="card">

        <img src="https://revistaoeste.com/oestegeral/wp-content/uploads/2026/01/agachamento-1-1.jpg">

        <div class="card-content">

            <h3>Corpo Inteiro</h3>
            </div>

<div class="cards-grid">

    <div class="card">

        <img src="https://generationiron.com/wp-content/uploads/2021/03/header-2-1-1024x543.jpg">
        <div class="cards-grid">

    <div class="card">

        <img src="https://generationiron.com/wp-content/uploads/2021/03/header-2-1-1024x543.jpg">
        <div class="info">

    <span>DICA PARA INICIANTES</span>

    <h2>Consistência Vale Mais que Intensidade</h2>

    <p>
        Não tente fazer tudo de uma vez. Escolha uma rotina,
        mantenha frequência de 3 a 4 treinos por semana,
        aprenda a execução correta dos exercícios e evolua
        gradualmente. Os melhores resultados vêm da constância.
    </p>

</div>

<div style="text-align:center; margin-bottom:60px;">

    <a href="index.php#mar" class="btn">
        Voltar para Total Loss
    </a>

</div>

<footer>
    © 2026 Total Loss
</footer>

</body>
</html>