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
    <link rel="stylesheet" href="main.css">
</head>

<body>
<?php include dirname(__DIR__) . '/header.php'; ?>


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
A musculação é uma forma de treinamento físico que utiliza exercícios para promover o desenvolvimento e a tonificação dos músculos do corpo. Essa prática envolve o uso de pesos livres, máquinas específicas e, em alguns casos, o próprio peso do corpo, como em exercícios de calistenia.

O objetivo da musculação pode variar de pessoa para pessoa e pode incluir o aumento da força muscular, a melhoria da estética corporal, a prevenção de lesões, a reabilitação após lesões, o aumento da resistência, entre outros.

É uma forma popular de exercício em academias e centros de treinamento ao redor do mundo. Além dos benefícios físicos, a musculação também pode contribuir para a melhoria da saúde geral, incluindo a saúde cardiovascular, a densidade óssea e o metabolismo.

Antes de iniciar um programa de musculação, é importante buscar orientação de um profissional qualificado, como um personal trainer ou um educador físico, para garantir que os exercícios sejam realizados de forma segura e eficaz, levando em consideração as necessidades e os objetivos individuais.


    </p>

</div>

<div class="bloco">

    <h2>Benefícios</h2>

    <img src="https://i.pinimg.com/736x/95/94/dc/9594dc6e7e2d009569c28f44e712cb4d.jpg"
     style="width:95%; height:auto; display:block; margin:5px auto; border-radius:6px;">

    <p>
Conforme o Relatório do Comitê de Especialistas da OMS, o treinamento proporcionado pela musculação é capaz de aumentar a força, potência, hipertrofia e desempenho motor do corpo. 

A musculação também é capaz de melhorar o perfil lipídico e reduzir o risco cardiovascular. De acordo com o estudo realizado com mulheres jovens, um dos benefícios da musculação para a saúde é melhorar as frações do colesterol, tanto HDL quanto o LDL, e diminuir o triglicerídeos. Outro estudo corroborou com a afirmação e concluiu que a prática de musculação reduz o risco de doença cardiovascular em qualquer idade.

O perfil glicêmico também sofre melhorias com a prática da musculação, devido sua característica de melhorar a sensibilidade insulínica das células, conforme conclui o estudo. Pessoas idosas também se beneficiam muito dos benefícios da musculação, tornando-a uma excelente escolha entre os exercícios para idosos.

Um estudo comparou o impacto de vários tipos de atividade física na composição corporal e a funcionalidade de idosas com risco de fratura. Ele concluiu que a musculação é a mais eficiente na melhora da autonomia funcional e composição corporal para esse grupo.

Além de melhorias no músculo, o estudo também afirma que a musculação é capaz de reduzir fraturas ósseas em idosos, tanto em homens quanto em mulheres. Por fim, um dos benefícios da musculação, aliado ao treinamento aeróbico, é a capacidade de melhorar a qualidade do sono de indivíduos, assim como afirma o estudo realizado.
    </p>

</div>

<div class="bloco">

    <h2>Hipertrofia</h2>

    <img src="https://brunorodrigonutri.com.br/wp-content/uploads/2024/10/O-que-e-hipertrofia-muscular-e-como-fazer-1024x825.jpg"
     style="width:95%; height:auto; display:block; margin:5px auto; border-radius:6px;">

    <p>
        Hipertrofia muscular é o aumento do tamanho e do volume dos músculos, o que acontece devido à pratica de atividade física intensa e regular e alimentação adequada, que deve ser rica em proteínas e carboidratos.
A hipertrofia pode ser conseguida através de um plano de treino adequado para os objetivos de cada pessoa, de uma alimentação correta e do descanso dos grupos musculares pelo menos 24 horas antes de trabalhá-los novamente, pois a hipertrofia não acontece durante o descanso.
    </p>

</div>

<div class="bloco">

    <h2>Alimentação</h2>

    <img src="https://fitestrong.com.br/images/materias/2024/06/alimentos_musculo_450_394391121.png">

    <p>
Manter uma alimentação saudável ao longo da vida evita não só a má nutrição em todas as suas formas, mas também uma gama de DCNT e outras condições de saúde. No entanto, o aumento da produção de alimentos processados, a rápida urbanização e a mudança de estilos de vida deram lugar a uma alteração nos padrões alimentares. As pessoas agora consomem mais alimentos ricos em calorias, gorduras, açúcares livres e sal/sódio – e muitas não comem frutas, vegetais e outras fibras alimentares o suficiente.

A composição exata de uma dieta diversificada, equilibrada e saudável varia de acordo com as características individuais de cada pessoa (idade, sexo, estilo de vida e grau de atividade física), contexto cultural, alimentos disponíveis localmente e hábitos alimentares. No entanto, os princípios básicos do que constitui uma alimentação saudável permanecem os mesmos para todas e todos.
    </p>

</div>

<div class="bloco">

    <h2>Whey Protein</h2>

    <img src="https://soldiersnutrition.com.br/cdn/shop/files/f7c93a90-867e-40dc-8591-85c7a02c5dd4-otytvp6vri.webp?v=1771352599"
     style="width:100%; height:auto; display:block;">

    <p>
        O whey protein é um suplemento obtido através da proteína do soro do leite de vaca, ovelha ou cabra, sendo muito usado para complementar a dieta de pessoas que desejam ganhar massa muscular,

Isso porque o whey protein melhora o rendimento durante os exercícios e favorece a recuperação muscular após os treinos de resistência, favorecendo o aumento dos músculos.

O whey protein é vendido em farmácias e lojas de suplementos, e a quantidade indicada depende da idade, ingestão de proteínas na dieta e prática de atividades físicas. Entretanto, a recomendação geral do whey protein é de 20 a 40 g por dia, podendo ser tomado diluído em água ou suco de frutas, por exemplo.
    </p>

</div>

<div class="bloco">

    <h2>Disciplina</h2>

    <img src="https://underlabz.com.br/cdn/shop/articles/O-protocolo-da-performance_-como-alinhar-treino_-foco-e-disciplina-no-seu-dia-a-dia_-_-Under-Labz-_-Loja-Oficial-190955875.jpg?v=1778948864">

    <p>
 A disciplina aprendida na academia nos prepara para enfrentar os desafios da vida com mais leveza e determinação. Ao superar os limites e alcançar nossas metas nos treinos, desenvolvemos a resiliência necessária para lidar com as adversidades do dia a dia.

A academia é muito mais do que um lugar para malhar. É um espaço de transformação pessoal, onde cultivamos a disciplina, a força de vontade e a persistência. Ao transformar a atividade física em um hábito, estamos investindo em nossa saúde física e mental, construindo uma vida mais equilibrada e feliz.

Lembre-se: a disciplina é a chave para alcançar qualquer objetivo. Comece hoje mesmo a sua jornada e descubra tudo o que a academia pode fazer por você!

</div>