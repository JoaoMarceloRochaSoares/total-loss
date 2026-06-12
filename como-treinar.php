<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Como Treinar Corretamente | Total Loss</title>

<link rel="stylesheet" href="main.css">

<style>

:root{
    --black:#0a0a0a;
    --dark:#111111;
    --orange:#ff5b2e;
    --white:#ffffff;
    --border:rgba(255,255,255,.08);
}

body{
    background:var(--black);
    color:var(--white);
    font-family:Arial, Helvetica, sans-serif;
}

/* HERO */

.training-page{
    max-width:1400px;
    margin:auto;
    padding:120px 8%;
}

/* BLOCOS */

.training-block{
    display:flex;
    align-items:center;
    gap:60px;
    margin-bottom:120px;
}

.training-block:nth-child(even){
    flex-direction:row-reverse;
}

.training-image{
    flex:1;
}

.training-image img{
    width:100%;
    height:500px;
    object-fit:cover;
    border-radius:18px;
}

.training-content{
    flex:1;
}

.training-subtitle{
    color:var(--orange);
    font-size:18px;
    margin-bottom:15px;
}

.training-title{
    font-size:3rem;
    line-height:1.2;
    margin-bottom:25px;
}

.training-text{
    color:#d8d8d8;
    line-height:1.9;
    margin-bottom:35px;
}

.training-benefits{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
}

.benefit h4{
    color:white;
    margin-bottom:10px;
}

.benefit p{
    color:#bfbfbf;
    line-height:1.7;
}

/* PRODUTOS */

.products-section{
    margin-top:50px;
}

.products-title{
    text-align:center;
    font-size:2.5rem;
    margin-bottom:50px;
}

.products-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
    margin-bottom:30px;
}

.product-card{
    background:var(--dark);
    border:1px solid var(--border);
    border-radius:20px;
    overflow:hidden;
    cursor:pointer;
    transition:.3s;
    text-decoration:none;
}

.product-card:hover{
    transform:translateY(-10px);
    border-color:var(--orange);
}

.product-card img{
    width:100%;
    height:250px;
    object-fit:cover;
}

.product-info{
    padding:25px;
}

.product-info h3{
    color:white;
    margin-bottom:12px;
}

.product-info p{
    color:#bdbdbd;
    line-height:1.7;
}

/* RESPONSIVO */

@media(max-width:991px){

.training-block{
    flex-direction:column !important;
}

.training-title{
    font-size:2rem;
}

.products-grid{
    grid-template-columns:1fr;
}

}

</style>

</head>

<body>

<section class="training-page">

    <!-- BLOCO 1 -->

    <div class="training-block">

        <div class="training-image">
            <img src="images/treino-peito.jpg">
        </div>

        <div class="training-content">

            <div class="training-subtitle">
                Treino Inteligente
            </div>

            <h2 class="training-title">
                A execução correta vale mais do que aumentar a carga
            </h2>

            <p class="training-text">
                Muitos praticantes acreditam que levantar mais peso é o
                único caminho para evoluir. Porém, a técnica correta gera
                maior ativação muscular, melhora os resultados e reduz
                riscos de lesão.
            </p>

            <div class="training-benefits">

                <div class="benefit">
                    <h4>Maior ativação muscular</h4>
                    <p>Estimula corretamente o músculo alvo.</p>
                </div>

                <div class="benefit">
                    <h4>Menos lesões</h4>
                    <p>Proteção para articulações e tendões.</p>
                </div>

                <div class="benefit">
                    <h4>Mais desempenho</h4>
                    <p>Treinos mais eficientes.</p>
                </div>

                <div class="benefit">
                    <h4>Melhores resultados</h4>
                    <p>Evolução consistente.</p>
                </div>

            </div>

        </div>

    </div>

    <!-- BLOCO 2 -->

    <div class="training-block">

        <div class="training-image">
            <img src="images/treino-costas.jpg">
        </div>

        <div class="training-content">

            <div class="training-subtitle">
                Treino de Costas
            </div>

            <h2 class="training-title">
                Concentre-se na contração muscular
            </h2>

            <p class="training-text">
                Durante remadas e puxadas, o foco deve estar em sentir
                os músculos das costas trabalhando. Isso aumenta a
                eficiência do exercício e melhora o desenvolvimento.
            </p>

            <div class="training-benefits">

                <div class="benefit">
                    <h4>Mais consciência corporal</h4>
                    <p>Melhora a execução.</p>
                </div>

                <div class="benefit">
                    <h4>Ganhos superiores</h4>
                    <p>Mais estímulo muscular.</p>
                </div>

                <div class="benefit">
                    <h4>Postura melhor</h4>
                    <p>Fortalecimento da região dorsal.</p>
                </div>

                <div class="benefit">
                    <h4>Maior estabilidade</h4>
                    <p>Segurança em outros exercícios.</p>
                </div>

            </div>

        </div>

    </div>

    <!-- BLOCO 3 -->

    <div class="training-block">

        <div class="training-image">
            <img src="images/treino-perna.jpg">
        </div>

        <div class="training-content">

            <div class="training-subtitle">
                Treino de Pernas
            </div>

            <h2 class="training-title">
                Amplitude completa gera melhores resultados
            </h2>

            <p class="training-text">
                Exercícios executados com amplitude correta recrutam mais
                fibras musculares e promovem maior crescimento muscular.
            </p>

            <div class="training-benefits">

                <div class="benefit">
                    <h4>Mais hipertrofia</h4>
                    <p>Maior recrutamento muscular.</p>
                </div>

                <div class="benefit">
                    <h4>Força funcional</h4>
                    <p>Movimentos mais completos.</p>
                </div>

                <div class="benefit">
                    <h4>Mobilidade</h4>
                    <p>Melhora da flexibilidade.</p>
                </div>

                <div class="benefit">
                    <h4>Desenvolvimento equilibrado</h4>
                    <p>Crescimento uniforme.</p>
                </div>

            </div>

        </div>

    </div>

    <!-- PRODUTOS -->

    <section class="products-section">

        <h2 class="products-title">
            Produtos Recomendados
        </h2>

        <div class="products-grid">

            <a href="catalogos.php" class="product-card">
                <img src="images/whey.jpg">
                <div class="product-info">
                    <h3>Whey Protein</h3>
                    <p>Ideal para recuperação muscular.</p>
                </div>
            </a>

            <a href="catalogos.php" class="product-card">
                <img src="images/barra.jpg">
                <div class="product-info">
                    <h3>Barra Proteica</h3>
                    <p>Lanche rápido e nutritivo.</p>
                </div>
            </a>

            <a href="catalogos.php" class="product-card">
                <img src="images/hipercalorico.jpg">
                <div class="product-info">
                    <h3>Hipercalórico</h3>
                    <p>Auxilia no ganho de massa.</p>
                </div>
            </a>

        </div>

        <div class="products-grid">

            <a href="catalogos.php" class="product-card">
                <img src="images/pretreino.jpg">
                <div class="product-info">
                    <h3>Pré-Treino</h3>
                    <p>Mais energia durante o treino.</p>
                </div>
            </a>

            <a href="catalogos.php" class="product-card">
                <img src="images/creatina.jpg">
                <div class="product-info">
                    <h3>Creatina</h3>
                    <p>Força e desempenho.</p>
                </div>
            </a>

            <a href="catalogos.php" class="product-card">
                <img src="images/kit.jpg">
                <div class="product-info">
                    <h3>Kit Ganho de Massa</h3>
                    <p>Combinação completa para evolução.</p>
                </div>
            </a>

        </div>

    </section>

</section>

</body>
</html>