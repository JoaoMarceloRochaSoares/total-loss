<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Como Treinar Corretamente - Total Loss</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>

:root{
--black:#0a0a0a;
--dark:#111111;
--green:#0f3d2e;
--green-hover:#14513d;
--gold:#c8a96b;
--white:#ffffff;
--border:rgba(255,255,255,.08);
}

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
background:var(--black);
color:var(--white);
}

.hero{
height:70vh;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
padding:2rem;
background:
linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),
url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1920');
background-size:cover;
background-position:center;
}

.hero-content h1{
font-size:4rem;
margin-bottom:1rem;
color:var(--gold);
}

.hero-content p{
font-size:1.2rem;
max-width:700px;
margin:auto;
line-height:1.8;
}

.section{
padding:6rem 9%;
}

.heading{
text-align:center;
font-size:3rem;
margin-bottom:4rem;
color:var(--gold);
}

.info-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:2rem;
}

.info-box{
background:var(--dark);
padding:2rem;
border-radius:1rem;
border:1px solid var(--border);
transition:.3s;
}

.info-box:hover{
transform:translateY(-10px);
}

.info-box i{
font-size:2rem;
color:var(--gold);
margin-bottom:1rem;
}

.info-box h3{
margin-bottom:1rem;
}

.info-box p{
line-height:1.8;
color:#ccc;
}

.products{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:2rem;
}

.product-card{
background:var(--dark);
border-radius:1rem;
overflow:hidden;
border:1px solid var(--border);
transition:.3s;
}

.product-card:hover{
transform:translateY(-10px);
}

.product-card img{
width:100%;
height:220px;
object-fit:cover;
}

.product-content{
padding:2rem;
}

.product-content h3{
margin-bottom:1rem;
color:var(--gold);
}

.product-content p{
color:#ccc;
line-height:1.8;
}

.timeline{
max-width:900px;
margin:auto;
}

.timeline-step{
background:var(--dark);
padding:2rem;
margin-bottom:2rem;
border-left:5px solid var(--gold);
border-radius:.5rem;
}

.timeline-step h3{
margin-bottom:.8rem;
color:var(--gold);
}

.cta{
text-align:center;
padding:6rem 2rem;
background:linear-gradient(135deg,var(--green),#081b14);
}

.cta h2{
font-size:3rem;
margin-bottom:1rem;
}

.cta p{
font-size:1.1rem;
margin-bottom:2rem;
}

.btn{
display:inline-block;
padding:1rem 3rem;
background:var(--gold);
color:#000;
font-weight:bold;
text-decoration:none;
border-radius:5rem;
transition:.3s;
}

.btn:hover{
transform:scale(1.05);
}

.back{
position:fixed;
top:20px;
left:20px;
z-index:999;
}

</style>

</head>

<body>

<a href="../index.php" class="btn back">
<i class="fas fa-arrow-left"></i> Voltar
</a>

<section class="hero">
<div class="hero-content">
<h1>Como Treinar Corretamente</h1>
<p>
Aprenda os princípios fundamentais para ganhar massa muscular,
perder gordura e melhorar sua performance sem cometer erros que
atrasam seus resultados.
</p>
</div>
</section>

<section class="section">

<h2 class="heading">Passos Fundamentais</h2>

<div class="info-grid">

<div class="info-box">
<i class="fas fa-dumbbell"></i>
<h3>Aquecimento</h3>
<p>
Antes de iniciar qualquer treino faça entre 5 e 10 minutos de
aquecimento. Isso reduz o risco de lesões e melhora seu desempenho.
</p>
</div>

<div class="info-box">
<i class="fas fa-running"></i>
<h3>Execução Correta</h3>
<p>
Priorize a técnica antes da carga. Movimentos corretos geram mais
resultado e protegem suas articulações.
</p>
</div>

<div class="info-box">
<i class="fas fa-clock"></i>
<h3>Descanso</h3>
<p>
Respeite os intervalos entre séries e tenha pelo menos 7 a 8 horas
de sono por noite para recuperação muscular.
</p>
</div>

<div class="info-box">
<i class="fas fa-apple-alt"></i>
<h3>Alimentação</h3>
<p>
Sem alimentação adequada não existe evolução consistente.
Consuma proteínas, carboidratos e gorduras saudáveis.
</p>
</div>

</div>

</section>

<section class="section">

<h2 class="heading">Suplementos e Como Utilizar</h2>

<div class="products">

<div class="product-card">
<img src="https://images.unsplash.com/photo-1622484212850-eb596d769edc?q=80&w=1200" alt="">
<div class="product-content">
<h3>Whey Protein</h3>
<p>
Ideal após o treino para auxiliar na recuperação muscular.
Pode ser consumido junto com água ou leite logo após a atividade física.
</p>
</div>
</div>

<div class="product-card">
<img src="https://images.unsplash.com/photo-1605296867424-35fc25c9212a?q=80&w=1200" alt="">
<div class="product-content">
<h3>Creatina</h3>
<p>
Consumir diariamente. Auxilia no aumento da força,
explosão muscular e recuperação entre os treinos.
</p>
</div>
</div>

<div class="product-card">
<img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?q=80&w=1200" alt="">
<div class="product-content">
<h3>Barra de Proteína</h3>
<p>
Excelente para lanches rápidos durante o dia.
Ajuda a atingir a meta diária de proteínas.
</p>
</div>
</div>

<div class="product-card">
<img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?q=80&w=1200" alt="">
<div class="product-content">
<h3>Pré-Treino</h3>
<p>
Consumir cerca de 30 minutos antes do treino para
aumentar energia, foco e disposição.
</p>
</div>
</div>

</div>

</section>

<section class="section">

<h2 class="heading">Exemplo de Rotina Correta</h2>

<div class="timeline">

<div class="timeline-step">
<h3>1. Antes do treino</h3>
<p>Hidratação + refeição leve ou pré-treino.</p>
</div>

<div class="timeline-step">
<h3>2. Aquecimento</h3>
<p>5 a 10 minutos de cardio leve.</p>
</div>

<div class="timeline-step">
<h3>3. Treino principal</h3>
<p>Foco na execução perfeita dos movimentos.</p>
</div>

<div class="timeline-step">
<h3>4. Pós-treino</h3>
<p>Whey Protein + refeição rica em proteínas.</p>
</div>

<div class="timeline-step">
<h3>5. Recuperação</h3>
<p>Sono de qualidade e descanso muscular.</p>
</div>

</div>

</section>

<section class="cta">

<h2>Pronto para Evoluir?</h2>

<p>
Agora que você sabe como treinar corretamente,
conheça os suplementos que podem acelerar seus resultados.
</p>

<a href="../produtos.php" class="btn">
VER CATÁLOGO DE PRODUTOS
</a>

</section>

</body>
</html>