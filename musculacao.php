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
    margin-top:7rem;
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
    url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1600');
    background-size:cover;
    background-position:center;
}

.hero-content span{
    color:rgb(238,87,51);
    font-size:2rem;
}

.hero-content h1{
    color:#fff;
    font-size:6rem;
    margin:2rem 0;
}

.hero-content p{
    color:#ddd;
    font-size:1.8rem;
    max-width:800px;
    margin:auto;
    line-height:2;
}

.muscle-section{
    background:#1a1a1a;
}

.muscle-card{
    display:flex;
    align-items:center;
    gap:5rem;
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
    font-size:4rem;
    margin:1.5rem 0;
}

.muscle-content p{
    color:#ccc;
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
    background:#111;
    padding:2rem;
    border-radius:1rem;
    border:1px solid #222;
}

.benefit h4{
    color:#fff;
    font-size:1.8rem;
}

.benefit p{
    font-size:1.4rem;
}

.product-highlight{
    background:#111;
}

.product-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:3rem;
    margin-top:4rem;
}

.product-box{
    background:#1a1a1a;
    border:1px solid #222;
    border-radius:1rem;
    overflow:hidden;
    transition:.3s;
}

.product-box:hover{
    transform:translateY(-10px);
    border-color:rgb(238,87,51);
}

.product-box img{
    width:100%;
    height:260px;
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
    line-height:1.8;
    margin-top:1rem;
}

.more-products{
    text-align:center;
    margin-top:5rem;
}

@media(max-width:991px){

.hero-content h1{
    font-size:4rem;
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
    <a href="index.php" class="logo"><span>Total</span>Loss</a>

    <nav class="navbar">
        <a href="index.php">Início</a>
        <a href="produtos.php">Produtos</a>
    </nav>
</header>

<section class="hero-musculacao">

    <div class="hero-content">
        <span>Treino de Força</span>

        <h1>Musculação para Evolução Real</h1>

        <p>
            A musculação é uma das formas mais eficientes de desenvolver
            força, hipertrofia, resistência muscular e melhorar a saúde.
            Com treinamento adequado e suplementação correta os resultados
            aparecem de forma consistente.
        </p>
    </div>

</section>

<section class="muscle-section">

    <div class="muscle-card">

        <div class="muscle-image">
            <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61">
        </div>

        <div class="muscle-content">

            <span>Hipertrofia</span>

            <h2>Construa Massa Muscular</h2>

            <p>
                O crescimento muscular acontece através da combinação
                entre treino intenso, descanso adequado e alimentação.
            </p>

            <div class="benefits">

                <div class="benefit">
                    <h4>Mais força</h4>
                    <p>Evolução constante.</p>
                </div>

                <div class="benefit">
                    <h4>Mais volume</h4>
                    <p>Maior desenvolvimento muscular.</p>
                </div>

                <div class="benefit">
                    <h4>Melhor postura</h4>
                    <p>Fortalecimento corporal.</p>
                </div>

                <div class="benefit">
                    <h4>Mais desempenho</h4>
                    <p>Resultados consistentes.</p>
                </div>

            </div>

        </div>

    </div>

    <div class="muscle-card">

        <div class="muscle-image">
            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438">
        </div>

        <div class="muscle-content">

            <span>Execução Correta</span>

            <h2>Técnica Sempre em Primeiro Lugar</h2>

            <p>
                Executar corretamente os exercícios gera mais ativação
                muscular e reduz significativamente o risco de lesões.
            </p>

        </div>

    </div>

    <div class="muscle-card">

        <div class="muscle-image">
            <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b">
        </div>

        <div class="muscle-content">

            <span>Disciplina</span>

            <h2>Consistência Gera Resultados</h2>

            <p>
                A evolução física é consequência da repetição diária de
                hábitos corretos e do compromisso com seus objetivos.
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
            <img src="https://images.unsplash.com/photo-1622484212850-eb596d769edc">
            <div class="product-info">
                <h3>Whey Protein</h3>
                <p>Ideal para recuperação e crescimento muscular.</p>
            </div>
        </div>

        <div class="product-box">
            <img src="https://images.unsplash.com/photo-1605296867304-46d5465a13f1">
            <div class="product-info">
                <h3>Hipercalórico</h3>
                <p>Auxilia no ganho de peso e massa muscular.</p>
            </div>
        </div>

        <div class="product-box">
            <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a">
            <div class="product-info">
                <h3>Creatina</h3>
                <p>Mais força, potência e desempenho nos treinos.</p>
            </div>
        </div>

    </div>

    <div class="more-products">

        <a href="produtos.php" class="btn">
            Ver Mais Produtos
        </a>

    </div>

</section>

</body>
</html>