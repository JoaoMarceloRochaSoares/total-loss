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
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include dirname(__DIR__) . '/header.php'; ?>

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

            <ul>
                <li>Agachamento 3x12</li>
                <li>Supino Máquina 3x12</li>
                <li>Puxada Frontal 3x12</li>
                <li>Desenvolvimento 3x10</li>
                <li>Prancha 3x30s</li>
            </ul>

        </div>

    </div>

    <div class="card">

        <img src="https://totalpass.com/wp-content/uploads/2024/07/supino-reto.jpg">

        <div class="card-content">


            <h3>Superior</h3>

            <ul>
                <li>Supino Reto 3x12</li>
                <li>Remada 3x12</li>
                <li>Rosca Direta 3x12</li>
                <li>Tríceps Polia 3x12</li>
                <li>Elevação Lateral 3x15</li>
            </ul>

        </div>

    </div>

    <div class="card">

        <img src="https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia29406/mulher-malhando-cpt.jpg">

        <div class="card-content">


            <h3>Inferior</h3>

            <ul>
                <li>Agachamento 3x12</li>
                <li>Leg Press 3x15</li>
                <li>Extensora 3x15</li>
                <li>Flexora 3x15</li>
                <li>Panturrilha 4x20</li>
            </ul>

        </div>

    </div>

</div>


<div class="cards-grid">

    <div class="card">

        <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA22ZuzO.img?w=768&h=403&m=6&x=505&y=75&s=44&d=44">

        <div class="card-content">

            <h3>Emagrecimento</h3>

            <ul>
                <li>Polichinelo 30s</li>
                <li>Agachamento 15 reps</li>
                <li>Flexão 12 reps</li>
                <li>Corrida 2 min</li>
                <li>4 Circuitos</li>
            </ul>

        </div>

    </div>

    <div class="card">

        <img src="https://www.fiberoficial.com.br/cdn/shop/articles/Como_Aumentar_Resistencia_Fisica_Rapidamente_Dicas_Eficazes.jpg?v=1748869032&width=1500">

        <div class="card-content">


            <h3>Resistência</h3>

            <ul>
                <li>Leg Press 20 reps</li>
                <li>Remada 15 reps</li>
                <li>Flexões 12 reps</li>
                <li>Prancha 45s</li>
                <li>4 Séries</li>
            </ul>

        </div>

    </div>

    <div class="card">

        <img src="https://images.unsplash.com/photo-1483721310020-03333e577078?q=80&w=1200">

        <div class="card-content">


            <h3>Condicionamento</h3>

            <ul>
                <li>Esteira 10 min</li>
                <li>Bicicleta 10 min</li>
                <li>Abdominal 20 reps</li>
                <li>Prancha 30s</li>
                <li>Alongamento</li>
            </ul>

        </div>

    </div>

</div>


<div class="cards-grid">

    <div class="card">

        <img src="https://generationiron.com/wp-content/uploads/2021/03/header-2-1-1024x543.jpg">

        <div class="card-content">

            <h3>Calistenia Básica</h3>

            <ul>
                <li>Flexões 3x10</li>
                <li>Agachamentos 3x20</li>
                <li>Prancha 3x30s</li>
                <li>Abdominal 3x20</li>
                <li>Mobilidade</li>
            </ul>

        </div>

    </div>

    <div class="card">

        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200">

        <div class="card-content">

            <h3>Corpo Funcional</h3>

            <ul>
                <li>Afundo 3x12</li>
                <li>Flexão 3x12</li>
                <li>Prancha Lateral</li>
                <li>Elevação Joelhos</li>
                <li>Mobilidade</li>
            </ul>

        </div>

    </div>

    <div class="card">

        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiDbVrZ7wVv3zVpi3DIiSBMtACVGqKa-G3mI4xO_fz5t1-1ZbhmXmPq_lQYd1sp8oOdVC1KALs_0Ei3HZ5yBI3AIAkN5pR6ZpGTa2-FUYpFHGKbIAQlgtku5kma_dTgpgKBGS4BMgvJChU/w1200-h630-p-k-no-nu/melhores-exercicios-triceps-flexao-diamond-push-up.jpg">

        <div class="card-content">


            <h3>Evolução Inicial</h3>

            <ul>
                <li>Flexões 4x12</li>
                <li>Agachamentos 4x20</li>
                <li>Barra Australiana</li>
                <li>Prancha 45s</li>
                <li>Corrida 5 min</li>
            </ul>

        </div>

    </div>

</div>

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

<footer>
    © 2025 Treino para Iniciantes
</footer>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="main.js"></script>
    <script>
        if (typeof lucide !== "undefined") lucide.createIcons();
    </script>
</body>
</html>