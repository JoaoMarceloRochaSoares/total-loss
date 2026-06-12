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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="main.css">

    <style>

        .funcional-hero{
            margin-top:7rem;
            min-height:70vh;
            background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),
            url('https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=1920&auto=format&fit=crop') center/cover;
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
            background:linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)),
            url('https://pro3academia.com.br/wp-content/uploads/2024/12/Capa-Blog-Post-13-768x576.png') center/cover;
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
   <a href="index.php" class="logo"><span>Total</span>Loss</a>

    <nav class="navbar">
        <a href="index.php">Início</a>
        <a href="#sobre">Sobre</a>
        <a href="#beneficios">Benefícios</a>
        <a href="#massa">Massa Muscular</a>
    </nav>
</header>

<section class="funcional-hero">

    <div class="content">
        <span>TOTAL LOSS</span>

        <h1>Treino Funcional</h1>

        <p>
            O treino funcional utiliza movimentos naturais do corpo para desenvolver
            força, resistência, mobilidade, equilíbrio e coordenação, melhorando o
            desempenho físico tanto dentro quanto fora da academia.
        </p>

        <a href="#sobre" class="btn">Saiba Mais</a>
    </div>

</section>

<section class="funcional-info" id="sobre">

    <div class="container">

        <div class="image">
            <img src="https://assets-cdn.wellhub.com/images/mep-cms/Wellhub_Crossfit_05_fdc58ec758.jpg?w=1024&q=65" alt="">
        </div>

        <div class="content">

            <span style="color:rgb(238,87,51);font-size:2rem;">
                COMO FUNCIONA
            </span>

            <h2>O que é o Treino Funcional?</h2>

            <p>
                O treino funcional é baseado em movimentos que simulam ações do dia a dia,
                como empurrar, puxar, agachar, correr, saltar e girar.
            </p>

            <p>
                Diferente dos exercícios isolados, ele trabalha vários grupos musculares
                ao mesmo tempo, promovendo maior gasto calórico e melhor condicionamento físico.
            </p>

            <p>
                Os exercícios podem ser realizados utilizando peso corporal,
                cordas, cones, kettlebells, elásticos e diversos acessórios.
            </p>

        </div>

    </div>

</section>

<section class="beneficios" id="beneficios">

    <h1 class="heading">
        <span>Benefícios do Treino Funcional</span>
    </h1>

    <div class="beneficios-grid">

        <div class="beneficio-card">
            <i class="fas fa-fire"></i>
            <h3>Alto Gasto Calórico</h3>
            <p>
                Exercícios dinâmicos aumentam o consumo de energia e auxiliam
                na redução do percentual de gordura corporal.
            </p>
        </div>

        <div class="beneficio-card">
            <i class="fas fa-running"></i>
            <h3>Mais Mobilidade</h3>
            <p>
                Desenvolve movimentos mais eficientes, melhorando a flexibilidade,
                coordenação e equilíbrio.
            </p>
        </div>

        <div class="beneficio-card">
            <i class="fas fa-dumbbell"></i>
            <h3>Força Global</h3>
            <p>
                Trabalha diversos grupos musculares simultaneamente,
                fortalecendo o corpo de forma completa.
            </p>
        </div>

    </div>

</section>

<section class="massa-muscular" id="massa">

    <h1 class="heading">
        <span>Treino Funcional e Ganho de Massa</span>
    </h1>

    <div class="massa-grid">

        <div class="massa-card">
            <h3>Maior Recrutamento Muscular</h3>
            <p>
                Movimentos compostos ativam vários músculos ao mesmo tempo,
                aumentando o estímulo para hipertrofia.
            </p>
        </div>

        <div class="massa-card">
            <h3>Fortalecimento do Core</h3>
            <p>
                O fortalecimento da região abdominal e lombar melhora a estabilidade,
                permitindo melhor desempenho em outros treinos de força.
            </p>
        </div>

        <div class="massa-card">
            <h3>Aumento da Intensidade</h3>
            <p>
                Circuitos funcionais podem elevar a intensidade do treinamento,
                favorecendo adaptações musculares importantes.
            </p>
        </div>

        <div class="massa-card">
            <h3>Complemento da Musculação</h3>
            <p>
                Quando combinado com musculação e alimentação adequada,
                o treino funcional pode potencializar o ganho de massa muscular.
            </p>
        </div>

    </div>

</section>

<section class="destaque">

    <h2>Treine de Forma Inteligente</h2>

    <p>
        O treino funcional não serve apenas para emagrecer. Ele melhora a capacidade
        física geral, fortalece músculos importantes para o dia a dia e pode ser um
        excelente aliado na busca por hipertrofia quando integrado a um programa de
        treinamento completo.
    </p>

   <a href="index.php" class="btn">
    Voltar ao Início
   </a>

</section>

<footer class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Total Loss</h3>
            <p>
                Transformando saúde, performance e qualidade de vida.
            </p>
        </div>

        <div class="box">
            <h3>Links</h3>
            <a href="index.php">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#beneficios">Benefícios</a>
        </div>

        <div class="box">
            <h3>Contato</h3>
            <p><i class="fas fa-phone"></i> (21) 99222-3333</p>
            <p><i class="fas fa-envelope"></i> contato@totalloss.com</p>
        </div>

    </div>

</footer>

</body>
</html>