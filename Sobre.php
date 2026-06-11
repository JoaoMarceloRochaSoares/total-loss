<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sobre Nós - Total Loss</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="main.css">

<style>

/* TODO O SEU CSS ORIGINAL AQUI SEM ALTERAÇÕES */

.about-hero{
    padding-top:12rem;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:6rem;
    flex-wrap:wrap;
}

.about-hero .content{
    flex:1 1 50rem;
}

.about-hero .content span{
    color:rgb(238,87,51);
    font-size:2rem;
    font-weight:600;
}

.about-hero .content h1{
    color:#fff;
    font-size:5rem;
    margin:1.5rem 0;
}

.about-hero .content p{
    color:#ddd;
    font-size:1.7rem;
    line-height:2;
}

.about-hero .image{
    flex:1 1 40rem;
}

.about-hero .image img{
    width:100%;
    border-radius:1rem;
    border:.1rem solid #333;
    display:block;
}

.about-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:3rem;
}

.about-card{
    background:#1a1a1a;
    border:.1rem solid #333;
    border-radius:1rem;
    padding:3rem;
    transition:.3s;
}

.about-card:hover{
    border-color:rgb(238,87,51);
    transform:translateY(-8px);
}

.about-card h3{
    color:#fff;
    font-size:2.4rem;
    margin-bottom:1rem;
}

.about-card p{
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

.about-cta{
    text-align:center;
}

.about-cta h2{
    color:#fff;
    font-size:4rem;
}

.about-cta p{
    color:#ccc;
    font-size:1.7rem;
    margin:2rem auto;
    max-width:80rem;
}

@media (max-width:768px){

    .about-hero{
        flex-direction:column;
    }

    .about-hero .content h1{
        font-size:4rem;
    }

    .differentials h2,
    .about-cta h2{
        font-size:3rem;
    }
}

</style>
</head>

<body>

<!-- HEADER ORIGINAL DO INDEX -->

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
                <i class="fas fa-user-circle"></i>
                <?= htmlspecialchars($usuario_nome) ?>
            </a>

        <?php else: ?>

            <a href="Login/login.php">Login</a>

        <?php endif; ?>

    </nav>

</header>


<section class="about-hero">

    <div class="content">

        <span>Quem Somos</span>

        <h1>Total Loss</h1>

        <p>
        A Total Loss nasceu com o propósito de oferecer uma experiência completa
        para quem busca evolução física, saúde e desempenho. Nossa plataforma
        reúne produtos de qualidade, conhecimento especializado e conteúdos
        educativos para auxiliar cada pessoa em sua jornada dentro do universo
        fitness.
        </p>

        <p>
        Além de trabalharmos com suplementos voltados para performance,
        recuperação e bem-estar, também disponibilizamos artigos sobre
        musculação, alimentação saudável, hábitos de vida e estratégias para
        iniciantes. Acreditamos que resultados consistentes são construídos
        através da combinação entre informação, disciplina e produtos adequados.
        </p>

        <p>
        Nosso objetivo é criar um ambiente onde qualquer pessoa,
        independentemente do nível de experiência, possa encontrar tudo o que
        precisa para alcançar seus objetivos com mais confiança, segurança e
        eficiência.
        </p>

    </div>

    <div class="image">

        <img src="https://template.canva.com/EAGxMuE08Po/1/0/1280w-yjdNb2lSqKs.jpg" alt="Total Loss">

    </div>

</section>

<section>

    <h2 class="heading">
        <span>Nossa Especialidade</span>
    </h2>

    <div class="about-grid">

        <div class="about-card">
            <h3>Suplementação Esportiva</h3>
            <p>
            Oferecemos suplementos selecionados para auxiliar no ganho de massa
            muscular, recuperação pós-treino, aumento de desempenho e melhora
            da qualidade de vida.
            </p>
        </div>

        <div class="about-card">
            <h3>Produtos Premium</h3>
            <p>
            Trabalhamos com produtos desenvolvidos para atender diferentes
            objetivos, garantindo qualidade, praticidade e confiança para
            nossos clientes.
            </p>
        </div>

        <div class="about-card">
            <h3>Performance e Evolução</h3>
            <p>
            Nossa missão é fornecer recursos que contribuam para uma evolução
            física mais eficiente, segura e sustentável ao longo do tempo.
            </p>
        </div>

    </div>

</section>

<section>

    <h2 class="heading">
        <span>Conhecimento e Evolução</span>
    </h2>

    <div class="about-grid">

        <div class="about-card">
            <h3>Musculação</h3>
            <p>
            Conteúdos sobre hipertrofia, força, execução correta de exercícios
            e estratégias de treinamento para maximizar resultados.
            </p>
        </div>

        <div class="about-card">
            <h3>Alimentação Saudável</h3>
            <p>
            Artigos e orientações voltados para nutrição, planejamento alimentar
            e hábitos que contribuem para uma rotina mais equilibrada.
            </p>
        </div>

        <div class="about-card">
            <h3>Guia para Iniciantes</h3>
            <p>
            Materiais desenvolvidos para ajudar quem está começando na academia
            a entender os primeiros passos de forma simples e objetiva.
            </p>
        </div>

    </div>

</section>

<section class="differentials">

    <h2>Nossos Diferenciais</h2>

    <p>
    Na Total Loss acreditamos que uma loja fitness deve oferecer mais do que
    apenas produtos. Por isso unimos suplementação, informação e orientação em
    uma única plataforma. Nossa proposta é ajudar cada visitante a tomar
    decisões mais conscientes, encontrando produtos adequados aos seus objetivos
    e conteúdos que agreguem valor à sua rotina de treinamento e alimentação.
    </p>

</section>

<section class="about-cta">

    <h2>Pronto para alcançar novos resultados?</h2>

    <p>
    Explore nossa seleção de suplementos e descubra conteúdos desenvolvidos para
    auxiliar sua evolução dentro e fora da academia.
    </p>

    <a href="index.php#suppl" class="btn">
        Explorar Catálogo
    </a>

</section>

<!-- FOOTER ORIGINAL DO INDEX -->

<footer class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Links Rápidos</h3>
            <a class="links" href="index.php#home">Início</a>
            <a class="links" href="index.php#about">Sobre</a>
            <a class="links" href="index.php#features">Serviços</a>
            <a class="links" href="index.php#suppl">Suplementos</a>
            <a class="links" href="index.php#support">Suporte</a>
        </div>

        <div class="box">
            <h3>Funcionamento</h3>
            <p>Segunda a Sexta: 7h às 22h</p>
            <p>Sábado: 7h às 14h</p>
            <p>Domingo: Fechado</p>
        </div>

        <div class="box">
            <h3>Redes Sociais</h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>

    </div>

</footer>

<script src="main.js"></script>

</body>
</html>