<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Spinning Class - Total Loss</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="main.css">

<style>

.spinning-hero{
    padding-top:12rem;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:6rem;
    flex-wrap:wrap;
}

.spinning-hero .content{
    flex:1 1 50rem;
}

.spinning-hero .content span{
    color:rgb(238,87,51);
    font-size:2rem;
    font-weight:600;
}

.spinning-hero .content h1{
    color:#fff;
    font-size:5rem;
    margin:1.5rem 0;
}

.spinning-hero .content p{
    color:#ddd;
    font-size:1.7rem;
    line-height:2;
}

.spinning-hero .image{
    flex:1 1 40rem;
}

.spinning-hero .image img{
    width:100%;
    border-radius:1rem;
    border:.1rem solid #333;
    display:block;
}

.spinning-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:3rem;
}

.spinning-card{
    background:#1a1a1a;
    border:.1rem solid #333;
    border-radius:1rem;
    padding:3rem;
    transition:.3s;
}

.spinning-card:hover{
    border-color:rgb(238,87,51);
    transform:translateY(-8px);
}

.spinning-card h3{
    color:#fff;
    font-size:2.4rem;
    margin-bottom:1rem;
}

.spinning-card p{
    color:#ccc;
    font-size:1.5rem;
    line-height:1.8;
}

.differentials{
    text-align:center;
}

.differentials h2{
    color:#fff;
    font-size:4rem;
    margin-bottom:2rem;
}

.differentials p{
    color:#ddd;
    font-size:1.7rem;
    max-width:100rem;
    margin:auto;
    line-height:2;
}

.spinning-cta{
    text-align:center;
}

.spinning-cta h2{
    color:#fff;
    font-size:4rem;
}

.spinning-cta p{
    color:#ccc;
    font-size:1.7rem;
    margin:2rem auto;
    max-width:80rem;
}

@media (max-width:768px){

    .spinning-hero{
        flex-direction:column;
    }

    .spinning-hero .content h1{
        font-size:4rem;
    }

    .differentials h2,
    .spinning-cta h2{
        font-size:3rem;
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

       <a href="index.php#home">Início</a>
    <a href="index.php#about">Sobre</a>
    <a href="index.php#features">Serviços</a>
    <a href="index.php#suppl">Suplementos</a>
    <a href="index.php#mar">Matérias</a>
    <a href="index.php#support">Suporte</a>

        <?php if ($usuario_nome): ?>

            <a href="conta.php">
                <i class="fas fa-user-circle" style="margin-right:.4rem"></i>
                <?= htmlspecialchars($usuario_nome) ?>
            </a>

        <?php else: ?>

            <a href="../Login/login.php">Login</a>

        <?php endif; ?>

    </nav>

</header>
<section class="spinning-hero">

    <div class="content">

        <span>Treino de Alta Intensidade</span>

        <h1>Spinning Class</h1>

        <p>
        O Spinning é uma modalidade que combina resistência cardiovascular,
        intensidade e motivação em grupo. Através de sessões dinâmicas em
        bicicletas ergométricas, os participantes desenvolvem condicionamento
        físico, resistência muscular e maior capacidade cardiorrespiratória.
        </p>

        <p>
        As aulas simulam diferentes percursos e níveis de esforço,
        proporcionando um treino completo capaz de acelerar o metabolismo,
        aumentar o gasto calórico e contribuir para uma rotina fitness mais
        eficiente.
        </p>

        <p>
        Independentemente do seu nível de experiência, o Spinning permite uma
        evolução progressiva e segura, tornando-se uma excelente opção para
        quem deseja melhorar o desempenho físico e alcançar novos resultados.
        </p>

    </div>

    <div class="image">

        <img src="https://img.magnific.com/free-photo/people-doing-indoor-cycling_23-2149270268.jpg?semt=ais_hybrid&w=740&q=80"
             alt="Spinning Class">

    </div>

</section>

<section>

    <h2 class="heading">
        <span>Benefícios do Spinning</span>
    </h2>

    <div class="spinning-grid">

        <div class="spinning-card">

            <h3>Queima de Calorias</h3>

            <p>
            Treinos intensos que auxiliam no emagrecimento e ajudam a manter
            um elevado gasto energético.
            </p>

        </div>

        <div class="spinning-card">

            <h3>Resistência Física</h3>

            <p>
            Melhora o condicionamento cardiovascular e aumenta a capacidade de
            suportar atividades de longa duração.
            </p>

        </div>

        <div class="spinning-card">

            <h3>Fortalecimento Muscular</h3>

            <p>
            Trabalha principalmente pernas, glúteos e região abdominal,
            contribuindo para maior estabilidade corporal.
            </p>

        </div>

    </div>

</section>

<section>

    <h2 class="heading">
        <span>Por Que Escolher o Spinning?</span>
    </h2>

    <div class="spinning-grid">

        <div class="spinning-card">

            <h3>Alta Intensidade</h3>

            <p>
            Uma modalidade ideal para quem busca desafios constantes e rápida
            evolução física.
            </p>

        </div>

        <div class="spinning-card">

            <h3>Motivação em Grupo</h3>

            <p>
            O ambiente coletivo torna os treinos mais estimulantes e ajuda a
            manter a consistência.
            </p>

        </div>

        <div class="spinning-card">

            <h3>Baixo Impacto</h3>

            <p>
            Excelente alternativa para quem procura um exercício eficiente sem
            sobrecarregar excessivamente as articulações.
            </p>

        </div>

    </div>

</section>

<section class="differentials">

    <h2>Resultados Reais</h2>

    <p>
    O Spinning é uma atividade que une intensidade, resistência e disciplina.
    Com a prática constante, é possível melhorar o condicionamento físico,
    fortalecer a musculatura e desenvolver hábitos mais saudáveis para o dia
    a dia.
    </p>

</section>

<section class="spinning-cta">

    <h2>Pronto para superar seus limites?</h2>

    <p>
    Conheça outras modalidades e conteúdos fitness disponíveis na Total Loss.
    </p>

    <a href="../index.php#features" class="btn">
        Voltar aos Serviços
    </a>

</section>
<footer class="footer">

    <!-- cole aqui o mesmo footer do index.php -->

</footer>

<script src="../main.js"></script>

</body>
</html>             