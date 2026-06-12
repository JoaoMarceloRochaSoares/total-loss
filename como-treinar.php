<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Como Treinar Corretamente - Total Loss</title>

<link rel="stylesheet" href="main.css">

<style>

.treino-page{
    padding-top:12rem;
    min-height:100vh;
    background:#111;
}

.treino-hero{
    text-align:center;
    margin-bottom:6rem;
}

.treino-hero h1{
    color:#fff;
    font-size:5rem;
    margin-bottom:2rem;
}

.treino-hero span{
    color:rgb(238,87,51);
}

.treino-hero p{
    max-width:900px;
    margin:auto;
    color:#ccc;
    font-size:1.8rem;
    line-height:1.8;
}

.treino-content{
    display:grid;
    grid-template-columns:1fr;
    gap:3rem;
}

.treino-box{
    background:#1a1a1a;
    border:.1rem solid #333;
    border-radius:1rem;
    padding:3rem;
}

.treino-box h2{
    color:#fff;
    font-size:2.8rem;
    margin-bottom:2rem;
}

.treino-box p{
    color:#ccc;
    font-size:1.6rem;
    line-height:2;
}

.produto-info{
    display:grid;
    grid-template-columns:1fr 300px;
    gap:3rem;
    align-items:center;
    margin-top:3rem;
    background:#1a1a1a;
    border:.1rem solid #333;
    border-radius:1rem;
    padding:2rem;
    transition:.3s;
}

.produto-info:hover{
    border-color:rgb(238,87,51);
    transform:translateY(-5px);
}

.produto-texto h3{
    color:#fff;
    font-size:2.6rem;
    margin-bottom:1rem;
}

.produto-texto p{
    color:#ccc;
    font-size:1.6rem;
    line-height:1.9;
}

.produto-card{
    background:#000;
    height:250px;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:1rem;
    overflow:hidden;
}

.produto-card img{
    width:100%;
    height:100%;
    object-fit:contain;
}

.catalogo-final{
    text-align:center;
    margin-top:6rem;
}

.catalogo-final h2{
    color:#fff;
    font-size:3rem;
    margin-bottom:2rem;
}

.catalogo-final p{
    color:#ccc;
    font-size:1.6rem;
    margin-bottom:3rem;
}

@media(max-width:768px){

    .produto-info{
        grid-template-columns:1fr;
    }

    .produto-card{
        height:220px;
    }

    .treino-hero h1{
        font-size:3.8rem;
    }

}

</style>
</head>

<body>

<section class="treino-page">

<div class="treino-hero">
    <h1>Como <span>Treinar Corretamente</span></h1>

    <p>
        Treinar corretamente vai muito além de simplesmente levantar peso.
        Um treino eficiente depende da execução correta dos exercícios,
        alimentação adequada, descanso e constância. Seguindo esses princípios,
        você consegue melhores resultados, reduz o risco de lesões e melhora
        sua evolução física ao longo do tempo.
    </p>
</div>

<div class="treino-content">

    <div class="treino-box">

        <h2>Princípios de um Treino Eficiente</h2>

        <p>
            Antes de aumentar as cargas, aprenda a executar cada exercício
            corretamente. A postura adequada ativa melhor os músculos e evita
            lesões.
            <br><br>

            Procure treinar de forma consistente, respeitando períodos de
            descanso e recuperação muscular. O crescimento muscular acontece
            durante o descanso e não apenas durante o treino.
            <br><br>

            Uma alimentação equilibrada e rica em proteínas também é
            fundamental para fornecer energia e favorecer a recuperação dos
            músculos após cada sessão.
        </p>

    </div>

    <!-- WHEY -->

    <div class="produto-info">

        <div class="produto-texto">

            <h3>Whey Protein</h3>

            <p>
                O Whey Protein é uma das fontes de proteína mais utilizadas por
                praticantes de musculação. Sua principal função é auxiliar na
                recuperação e construção muscular.
                <br><br>

                O uso mais comum acontece após o treino, quando o organismo
                necessita de proteínas para reparar as fibras musculares
                trabalhadas. Também pode ser utilizado para complementar a
                ingestão diária de proteínas.
            </p>

        </div>

        <div class="produto-card">
            <img src="img/whey.png" alt="Whey Protein">
        </div>

    </div>

    <!-- HIPERCALORICO -->

    <div class="produto-info">

        <div class="produto-texto">

            <h3>Hipercalórico</h3>

            <p>
                O Hipercalórico é indicado para pessoas que possuem dificuldade
                em ganhar peso ou atingir a quantidade necessária de calorias
                ao longo do dia.
                <br><br>

                Pode ser consumido entre refeições ou após os treinos para
                aumentar o aporte energético. Quando combinado com uma rotina
                de treinos adequada, auxilia no ganho de massa muscular.
            </p>

        </div>

        <div class="produto-card">
            <img src="img/hipercalorico.png" alt="Hipercalórico">
        </div>

    </div>

    <!-- BARRA -->

    <div class="produto-info">

        <div class="produto-texto">

            <h3>Barra Proteica</h3>

            <p>
                As barras proteicas são práticas para quem precisa de uma opção
                rápida durante o dia.
                <br><br>

                Elas podem ser utilizadas como lanche intermediário,
                principalmente em momentos em que não é possível realizar uma
                refeição completa. São úteis para complementar proteínas e
                auxiliar na manutenção da dieta.
            </p>

        </div>

        <div class="produto-card">
            <img src="img/barra-proteica.png" alt="Barra Proteica">
        </div>

    </div>

</div>

<div class="catalogo-final">

    <h2>Conheça nossos suplementos</h2>

    <p>
        Agora que você já sabe como treinar corretamente e como utilizar os
        principais suplementos, visite nosso catálogo e encontre os produtos
        ideais para sua rotina.
    </p>

    <a href="catalogo.php" class="btn">
        Ver Catálogo
    </a>

</div>

</section>

</body>
</html>