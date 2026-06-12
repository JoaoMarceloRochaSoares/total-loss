<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musculação</title>

<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap");

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Nunito',sans-serif;
    text-decoration:none;
}

html{
    font-size:62.5%;
    scroll-behavior:smooth;
}

body{
    background:#111;
    color:#fff;
}

section{
    padding:5rem 9%;
}


.hero{
    min-height:70vh;
    background:
    linear-gradient(rgba(0,0,0,.75),rgba(0,0,0,.75)),
    url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1600&auto=format&fit=crop')
    center/cover;
    display:flex;
    align-items:center;
}

.hero .content{
    max-width:75rem;
}

.hero span{
    color:#ff5722;
    font-size:2rem;
    font-weight:700;
}

.hero h1{
    font-size:6rem;
    margin:1.5rem 0;
}

.hero p{
    font-size:1.8rem;
    color:#ddd;
    line-height:1.8;
}

.btn{
    display:inline-block;
    margin-top:2rem;
    padding:1.2rem 3rem;
    background:linear-gradient(130deg,#ff5722 93%,transparent 90%);
    color:#fff;
    font-size:1.7rem;
    border-radius:.5rem;
    transition:.3s;
}

.btn:hover{
    transform:scale(1.05);
}


.heading{
    text-align:center;
    margin-bottom:5rem;
    position:relative;
}

.heading::before{
    content:'';
    position:absolute;
    top:50%;
    left:0;
    width:100%;
    height:.1rem;
    background:#444;
    z-index:-1;
}

.heading span{
    background:#111;
    padding:.8rem 2rem;
    border:.1rem solid #555;
    border-radius:.5rem;
    color:#ff5722;
    font-size:3rem;
    font-weight:bold;
}


.bloco{
    max-width:1100px;
    margin:0 auto 8rem auto;
    text-align:center;
}

.bloco h2{
    font-size:3.8rem;
    color:#ff5722;
    margin-bottom:2rem;
}

.bloco p{
    font-size:1.8rem;
    line-height:2;
    color:#ccc;
    text-align:justify;
}


.bloco img{
    width:100%;
    max-width:850px;
    height:450px;
    object-fit:cover;
    border-radius:1rem;
    margin:3rem auto;
    display:block;
    border:2px solid #333;
    transition:.3s;
}

.bloco img:hover{
    transform:scale(1.02);
    border-color:#ff5722;
}


.cards-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(30rem,1fr));
    gap:3rem;
}

.card{
    background:#1a1a1a;
    border:.1rem solid #333;
    border-radius:1rem;
    padding:2.5rem;
    transition:.3s;
}

.card:hover{
    transform:translateY(-1rem);
    border-color:#ff5722;
}

.card h3{
    font-size:2.5rem;
    margin-bottom:1.5rem;
    color:#fff;
}

.card ul{
    padding-left:2rem;
}

.card li{
    font-size:1.6rem;
    color:#bbb;
    line-height:1.8;
}

</style>
</head>

<body>


<section class="hero">

    <div class="content">
        <span>Força • Disciplina • Evolução</span>
        <h1>Musculação</h1>
        <p>
            Transforme seu corpo com treino, disciplina e conhecimento.
            A musculação é o caminho mais eficiente para evolução física e mental.
        </p>
    </div>

</section>


<section>

<div class="heading">
    <span>Guia de Musculação</span>
</div>

<div class="bloco">

    <h2>O Que é Musculação</h2>

    <img src="https://www.olimpiadatododia.com.br/wp-content/uploads/2025/07/Como-a-musculacao-previne-lesoes-em-corredores-e-ciclistas.jpg">

    <p>
       A musculação é um treinamento de força que utiliza pesos, máquinas ou o próprio peso corporal 
       para desenvolver músculos, aumentar a força, melhorar a saúde e elevar o desempenho físico. Quando combinada com 
       alimentação adequada e descanso, produz excelentes resultados.
    </p>

</div>

<div class="bloco">

    <h2>Benefícios</h2>

    <img src="https://i.pinimg.com/736x/95/94/dc/9594dc6e7e2d009569c28f44e712cb4d.jpg"
     style="width:95%; height:auto; display:block; margin:5px auto; border-radius:6px;">

    <p>
       A musculação ajuda no ganho de massa muscular, acelera o metabolismo, fortalece ossos e articulações, melhora a postura, reduz o estresse e contribui para uma vida mais saudável.
    </p>

</div>

<div class="bloco">

    <h2>Hipertrofia</h2>

    <img src="https://brunorodrigonutri.com.br/wp-content/uploads/2024/10/O-que-e-hipertrofia-muscular-e-como-fazer-1024x825.jpg"
     style="width:95%; height:auto; display:block; margin:5px auto; border-radius:6px;">

    <p>
       Hipertrofia é o aumento do tamanho dos músculos. Ela acontece quando o treino gera estímulo suficiente e o corpo recebe nutrientes e descanso para se recuperar e crescer.
    </p>

</div>

<div class="bloco">

    <h2>Alimentação</h2>

    <img src="https://fitestrong.com.br/images/materias/2024/06/alimentos_musculo_450_394391121.png">

    <p>
       Uma alimentação equilibrada fornece energia para os treinos e nutrientes para a recuperação muscular. Proteínas, carboidratos, gorduras saudáveis e hidratação são fundamentais.
    </p>

</div>

<div class="bloco">

    <h2>Whey Protein</h2>

    <img src="https://soldiersnutrition.com.br/cdn/shop/files/f7c93a90-867e-40dc-8591-85c7a02c5dd4-otytvp6vri.webp?v=1771352599"
     style="width:100%; height:auto; display:block;">>

    <p>
        OO whey protein é um suplemento rico em proteínas que auxilia na recuperação muscular e ajuda a atingir as necessidades diárias de proteína.
    </p>

</div>

<div class="bloco">

    <h2>Disciplina</h2>

    <img src="https://underlabz.com.br/cdn/shop/articles/O-protocolo-da-performance_-como-alinhar-treino_-foco-e-disciplina-no-seu-dia-a-dia_-_-Under-Labz-_-Loja-Oficial-190955875.jpg?v=1778948864">

    <p>
       Resultados na musculação dependem de consistência. Treinar regularmente, alimentar-se bem e descansar adequadamente são os pilares da evolução.
    </p>

</div>