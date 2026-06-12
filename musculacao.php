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
           Os benefícios da musculação vão muito além da estética. O treinamento regular auxilia no ganho de massa muscular, acelera o metabolismo e aumenta
            o gasto calórico diário, facilitando o controle do peso corporal. Também fortalece ossos, tendões e articulações, reduzindo o risco 
            de lesões e doenças relacionadas ao envelhecimento. A prática frequente melhora a postura, a capacidade funcional e o condicionamento físico geral.
             Outro ponto importante é seu impacto positivo
             na saúde mental, ajudando a combater a ansiedade, o estresse e promovendo maior bem-estar.
</p>
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
      A musculação é muito mais do que apenas levantar pesos. Ela representa um estilo de vida baseado em disciplina, dedicação e evolução constante. Com um planejamento adequado, é possível desenvolver força, melhorar a composição corporal e aumentar a confiança. Além dos benefícios estéticos, o treinamento contribui para a saúde física e mental, ajudando na redução do estresse e no aumento da disposição diária. Cada treino é uma oportunidade de superar limites e alcançar novos objetivos. O conhecimento aliado à prática é o caminho para resultados duradouros.
</p>
    </p>

</div>

<div class="bloco">

    <h2>Benefícios</h2>

    <img src="https://i.pinimg.com/736x/95/94/dc/9594dc6e7e2d009569c28f44e712cb4d.jpg"
     style="width:95%; height:auto; display:block; margin:5px auto; border-radius:6px;">

    <p>
     Os benefícios da musculação vão muito além da estética. O treinamento regular auxilia no ganho de massa muscular, acelera o metabolismo e aumenta o gasto calórico diário, facilitando o controle do peso corporal. Também fortalece ossos, tendões e articulações, reduzindo o risco de lesões e doenças relacionadas ao envelhecimento. A prática frequente melhora a postura, a capacidade funcional e o condicionamento físico geral. Outro ponto importante é seu impacto positivo na saúde mental, ajudando a combater a ansiedade, o estresse e promovendo maior bem-estar.
    </p>

</div>

<div class="bloco">

    <h2>Hipertrofia</h2>

    <img src="https://brunorodrigonutri.com.br/wp-content/uploads/2024/10/O-que-e-hipertrofia-muscular-e-como-fazer-1024x825.jpg"
     style="width:95%; height:auto; display:block; margin:5px auto; border-radius:6px;">

    <p>
      A hipertrofia muscular é o processo responsável pelo aumento do tamanho das fibras musculares. Esse fenômeno ocorre quando o músculo recebe estímulos adequados durante o treino e dispõe de nutrientes suficientes para sua recuperação. Após cada sessão de exercícios, o organismo inicia um processo de reparação das fibras musculares, tornando-as maiores e mais fortes. Para maximizar esse resultado, é essencial seguir uma rotina consistente de treinamento, manter uma alimentação rica em proteínas e respeitar os períodos de descanso. A combinação desses fatores é fundamental para a evolução muscular.
    </p>

</div>

<div class="bloco">

    <h2>Alimentação</h2>

    <img src="https://fitestrong.com.br/images/materias/2024/06/alimentos_musculo_450_394391121.png">

    <p>
      A alimentação desempenha um papel decisivo nos resultados da musculação. É através dos alimentos que o organismo obtém a energia necessária para realizar os treinos e os nutrientes responsáveis pela recuperação muscular. Proteínas auxiliam na construção e manutenção dos músculos, enquanto os carboidratos fornecem combustível para atividades intensas. As gorduras saudáveis participam de processos hormonais importantes e a hidratação adequada garante o bom funcionamento do organismo. Uma dieta equilibrada e planejada potencializa o desempenho físico e acelera a conquista dos objetivos.

</div>

<div class="bloco">

    <h2>Whey Protein</h2>

    <img src="https://soldiersnutrition.com.br/cdn/shop/files/f7c93a90-867e-40dc-8591-85c7a02c5dd4-otytvp6vri.webp?v=1771352599"
     style="width:100%; height:auto; display:block;">>

    <p>
        O whey protein é um dos suplementos mais populares entre praticantes de musculação devido à sua alta concentração de proteínas de rápida absorção. Ele auxilia no processo de recuperação muscular após os treinos, favorecendo a síntese proteica e contribuindo para o crescimento muscular. Além disso, pode ser uma alternativa prática para complementar a ingestão diária de proteínas quando a alimentação não é suficiente. Seu uso deve estar alinhado às necessidades individuais e integrado a uma rotina alimentar equilibrada. Quando utilizado corretamente, torna-se um excelente aliado para quem busca melhores resultados.
</p>

    </p>

</div>

<div class="bloco">

    <h2>Disciplina</h2>

    <img src="https://underlabz.com.br/cdn/shop/articles/O-protocolo-da-performance_-como-alinhar-treino_-foco-e-disciplina-no-seu-dia-a-dia_-_-Under-Labz-_-Loja-Oficial-190955875.jpg?v=1778948864">

    <p>
       Os resultados na musculação são construídos ao longo do tempo por meio da consistência e da dedicação diária. Não existem fórmulas mágicas ou transformações instantâneas, mas sim a soma de pequenas ações realizadas de forma contínua. Treinar regularmente, manter uma alimentação adequada e respeitar os períodos de recuperação são os pilares fundamentais para a evolução física. A paciência e a persistência fazem toda a diferença durante a jornada. Com foco e comprometimento, é possível alcançar mudanças significativas tanto na aparência quanto na saúde e qualidade de vida.
    </p>

</div>