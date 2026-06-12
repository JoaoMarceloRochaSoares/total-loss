<?php
session_start();
$usuario_nome = $_SESSION['usuario_nome'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Total Loss</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>

    <header class="header">
        <a href="index.php" class="logo"><span>Total</span>Loss</a>

        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Início</a>
            <a href="#about">Sobre</a>
            <a href="#features">Serviços</a>
            <a href="#suppl">Suplementos</a>
            <a href="#mar">Matérias</a>
            <a href="#support">Suporte</a>
            <?php if ($usuario_nome): ?>
                <a href="/conta.php" style="color:#fff">
                    <i class="fas fa-user-circle" style="margin-right:.4rem"></i><?= htmlspecialchars($usuario_nome) ?>
                </a>
            <?php else: ?>
                <a href="/Login/login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <div id="cart-icon">
        <i data-lucide="shopping-cart"></i>
        <span id="cart-count">0</span>
    </div>

    <div id="cart-sidebar" class="hidden">
        <div class="cart-header">
            <h2>Meu Carrinho</h2>
        </div>
        <div id="cart-items"></div>
        <div class="cart-total">
            <div class="total-info">
                Total: R$ <span id="total-price">0.00</span>
            </div>
            <button class="checkout-btn">Finalizar Compra</button>
        </div>
    </div>

    <main>

        <section id="home" class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide"
                        style="background: url('img/TotalLoss.png.png') no-repeat center center/cover;">
                        <div class="content">
                            <span>Seja Forte, seja fit</span>
                            <a href="produtos.php" class="btn">Iniciar</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide"
                        style="background: url('totalloss.png') no-repeat center/cover;">
                        <div class="content">
                            <span>Seja Forte, seja fit</span>
                            <h3>Supere seus limites todos os dias.</h3>
                            <a href="produtos.php" class="btn">Iniciar</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide"
                        style="background: url('https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?q=80&w=1920&auto=format&fit=crop') no-repeat center/cover;">
                        <div class="content">
                            <span>Seja Forte, seja fit</span>
                            <h3>Transforme seu corpo e sua mente.</h3>
                            <a href="produtos.php" class="btn">Iniciar</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- ===== SOBRE ===== -->
        <section id="about" class="about">
            <div class="image">
                <img src="https://www.caffeinearmy.com.br/cdn/shop/files/grid_pic_1_whey_choco.webp?v=1765397590&width=1946"
                    alt="Pessoa treinando" loading="lazy">
            </div>

            <div class="content">
                <span>Sobre Nós</span>
                <h3 class="title">Cada dia é uma chance de se tornar melhor</h3>
                <p>Transforme seu corpo e sua mente com a melhor estrutura e profissionais capacitados.</p>

                <div class="box-container">
                    <div class="box">
                        <h3><i class="fas fa-check"></i> Corpo e Mente</h3>
                        <p>Treine seu corpo e sua mente será treinada</p>
                    </div>
                    <div class="box">
                        <h3><i class="fas fa-check"></i> Vida Saudável</h3>
                        <p>Conquiste uma vida saudável</p>
                    </div>
                    <div class="box">
                        <h3><i class="fas fa-check"></i> Estratégias</h3>
                        <p>Estratégias para seu treinamento</p>
                    </div>
                    <div class="box">
                        <h3><i class="fas fa-check"></i> Treino</h3>
                        <p>Treine seu corpo fortemente</p>
                    </div>
                </div>
                <a href="Sobre.php" class="btn">Ler mais</a>
            </div>
        </section>

        <!-- ===== SERVIÇOS ===== -->
        <section id="features" class="features">
            <h1 class="heading"><span>O que Oferecemos</span></h1>

            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="https://media.istockphoto.com/id/2182790211/pt/foto/woman-exercise-with-lat-pulldown-machine-in-gym.jpg?s=612x612&w=0&k=20&c=Y4_Xckao-dr764tnVfpDzlMLF6Ewu3BvB1YM4tI7Zdo="
                            alt="Musculação Profissional" loading="lazy">
                    </div>
                    <div class="content">
                        <h3>Musculação</h3>
                        <p>Equipamentos de última geração para hipertrofia, força e definição muscular com acompanhamento.</p>
                        <a href="musculacao.php" class="btn">Ler Mais</a>
                    </div>
                </div>

          <div class="box">
              <div class="image">
                 <img src="https://totalpass.com/wp-content/uploads/2023/08/Exercicios-na-maquina.jpg"
            alt="Treino Funcional Dinâmico" loading="lazy">
            </div>

             <div class="content">
             <h3>Treino Funcional</h3>

                     <p>
                     Circuitos dinâmicos e de alta intensidade para melhorar
                     seu condicionamento, força e agilidade corporal.
                     </p>

                     <a href="treino-funcional.php" class="btn">
                     Ler Mais
                 </a>
              </div>
            </div>

                <div class="box">
                    <div class="image">
                        <img src="https://previews.123rf.com/images/wavebreakmediamicro/wavebreakmediamicro1908/wavebreakmediamicro190801416/128269984-front-view-of-diverse-fit-people-exercising-on-exercise-bike-in-fitness-center-bright-modern-gym.jpg"
                            alt="Aula de Spinning" loading="lazy">
                    </div>
                    <div class="content">
                        <h3>Spinning Class</h3>
                        <p>Queime calorias rapidamente e melhore sua resistência cardiovascular com nossas aulas imersivas.</p>
                        <a href="spining-class.php" class="btn">Ler Mais</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SUPLEMENTOS ===== -->
        <section id="suppl" class="suppl">
            <div class="information">
                <span>Área de Suplementação</span>
                <h3>Turbine os seus resultados</h3>
                <p>Encontre os melhores produtos para otimizar sua performance física, saúde cognitiva e imunidade.</p>
                <p><i class="fas fa-bone"></i> <strong>Whey Protein:</strong> Recuperação Muscular</p>
                <p><i class="fas fa-bolt"></i> <strong>Creatina:</strong> Força e Performance</p>
                <p><i class="fas fa-brain"></i> <strong>Ômega 3:</strong> Saúde Cognitiva</p>
                <p><i class="fas fa-apple-alt"></i> <strong>Multivitamínico:</strong> Imunidade</p>
            </div>

            <div class="products-grid" id="product-list"></div>

            <div class="see-more-container">
                <a href="produtos.php" class="see-more-btn">VER MAIS PRODUTOS</a>
            </div>
        </section>

        <!-- ===== BANNER PROMOÇÃO ===== -->
        <section class="banner">
            <span>Junte-se a nós</span>
            <h3>Ganhe até 60% de desconto</h3>
            <p>Na primeira compra de 2 itens ganhe 60% de desconto</p>
            <a href="#suppl" class="btn">Quero</a>
        </section>

        <!-- ===== MATÉRIAS ===== -->
        <section id="mar" class="materias">
            <h1 class="heading"><span>Matérias de Exercícios</span></h1>

            <div class="box-container">
                <div class="box">
                    <img src="https://www.tatifigueira.com.br/blog/wp-content/uploads/2024/09/6186.jpg"
                        alt="Exercícios abdominais" loading="lazy">
                    <div class="content">
                        <h3>A melhor alimentação possível para quem treina</h3>
                        <p>Saiba como se alimentar bem antes de um treino</p>
                        <a href="alimentação-saudavel.php" class="btn">Ler mais</a>
                    </div>
                </div>

                <div class="box">
                    <img src="https://totalpass.com/wp-content/uploads/2023/07/Treino-de-triceps.jpg"
                        alt="Treino iniciante" loading="lazy">
                    <div class="content">
                        <h3>Treino rápido para iniciantes</h3>
                        <p>Comece no mundo fitness com exercícios fáceis e eficientes.</p>
                        <a href="treino-para-iniciantes.php" class="btn">Ler mais</a>
                    </div>
                </div>

                <div class="box">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjW6-Z3HRzzVVskITMi4uoer6l4yvtBWRH3droFkL0FSAA07O5cax2ZTc7ifC90kn0ZmSuuoUbCdg9tlwhtPOvXnpttWNkwY0mrDM-_Wz7aoaVUOwzqQ2IIrLWLo5liIJLJI-OeOk8-ICLSQRT0J9qJK8fwDsi1uGcaL3qqBWMBNHVJPPw1tdszzY1iFQ9i/w1200-h630-p-k-no-nu/O%20que%20muda%20com%203%20meses%20de%20academia.jpg"
                        alt="Execução correta" loading="lazy">
                    <div class="content">
                        <h3>Como treinar corretamente</h3>
                        <p>Evite lesões aprendendo a executar os exercícios da forma certa.</p>
                        <a href="como-treinar.php" class="btn">Ler mais</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FEEDBACKS ===== -->
        <section class="review">
            <div class="information">
                <h3>O que nossos clientes dizem</h3>
                <p>Quer saber o que nossos clientes falam sobre nós?</p>
                <a href="#" class="btn">Leia Todos</a>
            </div>

            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <p>Ótima interface e os melhores equipamentos da região. O suporte dos professores é excelente!</p>
                        <div class="user">
                            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=200&auto=format&fit=crop"
                                alt="João Luiz" loading="lazy">
                            <div class="info">
                                <h3>João Luiz</h3>
                                <span>Personal</span>
                            </div>
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <p>O melhor atendimento que eu já tive. Consegui atingir meus objetivos de saúde em poucos meses.</p>
                        <div class="user">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop"
                                alt="Luana" loading="lazy">
                            <div class="info">
                                <h3>Luana</h3>
                                <span>Designer</span>
                            </div>
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SUPORTE ===== -->
        <section id="support" class="support">
            <h1 class="heading"><span>Suporte ao Cliente</span></h1>
            <div class="row">
                <div class="contact-info">
                    <h3>Fale Conosco</h3>
                    <p><i class="fas fa-phone"></i> +55 (21) 99222-3333</p>
                    <p><i class="fas fa-envelope"></i> contato@totalloss.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Niterói, Rio de Janeiro, Brasil</p>
                </div>

                <form id="contato-form" action="Suporte_action.php" method="POST">
                    <input type="text" name="nome" placeholder="Seu Nome" class="box" required>
                    <input type="email" name="email" placeholder="Seu Email" class="box" required>
                    <textarea name="mensagem" placeholder="Sua Mensagem" class="box" cols="30" rows="10" required></textarea>
                    <input type="submit" value="Enviar Mensagem" class="btn">
                </form>
            </div>
        </section>

    </main>

    <!-- ===== MODAL CHECKOUT ===== -->
    <div id="checkout-overlay" class="checkout-overlay hidden">
        <div class="checkout-modal">
            <button class="checkout-close" onclick="fecharCheckout()">✖</button>

            <!-- Stepper -->
            <div class="checkout-stepper">
                <div class="ck-step ck-step-active" id="stepper-1">
                    <div class="ck-step-circle">1</div>
                    <span>Resumo</span>
                </div>
                <div class="ck-step-line"></div>
                <div class="ck-step" id="stepper-2">
                    <div class="ck-step-circle">2</div>
                    <span>Entrega</span>
                </div>
                <div class="ck-step-line"></div>
                <div class="ck-step" id="stepper-3">
                    <div class="ck-step-circle">3</div>
                    <span>Pagamento</span>
                </div>
            </div>

            <!-- PASSO 1: Resumo -->
            <div id="checkout-step-1" class="checkout-step active">
                <h2 class="checkout-title"><i class="fas fa-shopping-bag"></i> Resumo do Pedido</h2>
                <div id="checkout-items-list" class="checkout-items-list"></div>
                <div class="checkout-subtotal">
                    Total: R$ <span id="checkout-total-display">0.00</span>
                </div>
                <button class="btn checkout-next-btn" onclick="irParaEntrega()">
                    Continuar <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <!-- PASSO 2: Dados de Entrega -->
            <div id="checkout-step-2" class="checkout-step">
                <button class="checkout-back" onclick="voltarStep(1)">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
                <h2 class="checkout-title"><i class="fas fa-truck"></i> Dados para Entrega</h2>

                <div class="form-row">
                    <div class="form-group form-group--full">
                        <label>Nome Completo</label>
                        <input type="text" id="ent-nome" placeholder="Seu nome completo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>Endereço</label>
                        <input type="text" id="ent-endereco" placeholder="Rua, Avenida...">
                    </div>
                    <div class="form-group form-group--small">
                        <label>Número</label>
                        <input type="text" id="ent-numero" placeholder="Nº">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>Complemento</label>
                        <input type="text" id="ent-complemento" placeholder="Apto, Bloco... (opcional)">
                    </div>
                    <div class="form-group form-group--small">
                        <label>CEP</label>
                        <input type="text" id="ent-cep" maxlength="9" placeholder="00000-000" oninput="formatarCEP(this)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>Bairro</label>
                        <input type="text" id="ent-bairro" placeholder="Seu bairro">
                    </div>
                    <div class="form-group form-group--grow">
                        <label>Cidade</label>
                        <input type="text" id="ent-cidade" placeholder="Sua cidade">
                    </div>
                    <div class="form-group form-group--uf">
                        <label>UF</label>
                        <input type="text" id="ent-uf" maxlength="2" placeholder="RJ">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group form-group--grow">
                        <label>E-mail</label>
                        <input type="email" id="ent-email" placeholder="seu@email.com">
                    </div>
                    <div class="form-group form-group--grow">
                        <label>Telefone</label>
                        <input type="tel" id="ent-tel" placeholder="(21) 99999-9999" oninput="formatarTelefone(this)">
                    </div>
                </div>

                <button class="btn checkout-next-btn" onclick="irParaPagamento()">
                    Continuar <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <!-- PASSO 3: Pagamento -->
            <div id="checkout-step-3" class="checkout-step">
                <button class="checkout-back" onclick="voltarStep(2)">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
                <h2 class="checkout-title"><i class="fas fa-credit-card"></i> Método de Pagamento</h2>

                <!-- Seleção de método (estilo Readit: radio cards) -->
                <div class="pgto-opcoes">
                    <label class="pgto-card" id="pgto-label-cartao">
                        <input type="radio" name="pgto" value="cartao" onchange="mostrarPagamento(this)">
                        <i class="fas fa-credit-card"></i>
                        <span>Cartão de Crédito</span>
                    </label>
                    <label class="pgto-card" id="pgto-label-pix">
                        <input type="radio" name="pgto" value="pix" onchange="mostrarPagamento(this)">
                        <i class="fas fa-qrcode"></i>
                        <span>PIX</span>
                    </label>
                    <label class="pgto-card" id="pgto-label-boleto">
                        <input type="radio" name="pgto" value="boleto" onchange="mostrarPagamento(this)">
                        <i class="fas fa-barcode"></i>
                        <span>Boleto</span>
                    </label>
                </div>

                <!-- Área dinâmica de pagamento (estilo Readit) -->
                <div id="pgto-area" class="pgto-area">
                    <p class="pgto-hint"><i class="fas fa-hand-pointer"></i> Selecione um método acima para continuar.</p>
                </div>

                <button class="btn checkout-confirm-btn" id="btn-confirmar" onclick="confirmarPedido()" style="display:none;">
                    <i class="fas fa-check-circle"></i> Finalizar Pedido
                </button>
            </div>

            <!-- PASSO 4: Confirmação -->
            <div id="checkout-step-4" class="checkout-step">
                <div class="checkout-success">
                    <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                    <h2>Pedido Confirmado!</h2>
                    <p>Obrigado pela sua compra. Você receberá um e-mail com os detalhes em breve.</p>
                    <button class="btn" onclick="fecharCheckout(); limparCarrinho()">Continuar Comprando</button>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== POPUP LOGIN NECESSÁRIO ===== -->
    <div id="popup-login-required" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.7); z-index:99999; align-items:center; justify-content:center;">
        <div class="popup-login-card">
            <i class="fas fa-lock popup-lock-icon"></i>
            <h3>Faça login para continuar</h3>
            <p>Você precisa estar logado para finalizar sua compra.</p>
            <div class="popup-login-btns">
                <a href="/Login/login.php" class="btn">Fazer Login</a>
                <button onclick="fecharPopupLogin()" class="btn btn-outline">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- ===== POPUP SUPORTE ===== -->
    <div id="popup-contato" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.6); z-index:9999; align-items:center; justify-content:center;">
        <div class="popup-contato-card" style="background:#1a1a2e; padding:2rem; border-radius:1rem; text-align:center; max-width:360px; width:90%;">
            <p id="popup-msg" style="color:#fff; font-size:1.2rem; margin-bottom:1.5rem;"></p>
            <button onclick="fecharPopupContato()" class="btn">Fechar</button>
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Links Rápidos</h3>
                <a class="links" href="#home"><i class="fas fa-chevron-right"></i> Início</a>
                <a class="links" href="#about"><i class="fas fa-chevron-right"></i> Sobre</a>
                <a class="links" href="#features"><i class="fas fa-chevron-right"></i> Serviços</a>
                <a class="links" href="#suppl"><i class="fas fa-chevron-right"></i> Suplementos</a>
                <a class="links" href="#support"><i class="fas fa-chevron-right"></i> Suporte</a>
            </div>

            <div class="box">
                <h3>Funcionamento</h3>
                <p><i class="fas fa-calendar-alt"></i> Segunda a Sexta:</p>
                <p style="padding-left: 3rem; color: #aaa; margin-top: -1rem;"><i>7:00 - 22:00</i></p>
                <p><i class="fas fa-calendar-alt"></i> Sábado:</p>
                <p style="padding-left: 3rem; color: #aaa; margin-top: -1rem;"><i>7:00 - 14:00</i></p>
                <p><i class="fas fa-calendar-times"></i> Domingo: <i style="color: rgb(238, 87, 51);">Fechado</i></p>
            </div>

            <div class="box">
                <h3>Redes Sociais</h3>
                <p>Acompanhe nossa rotina de treinos e novidades.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f" aria-label="Facebook"></a>
                    <a href="#" class="fab fa-twitter" aria-label="Twitter"></a>
                    <a href="#" class="fab fa-linkedin" aria-label="LinkedIn"></a>
                    <a href="#" class="fab fa-instagram" aria-label="Instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>Novidades</h3>
                <p>Se inscreva para receber novidades e ofertas.</p>
                <form action="#" onsubmit="event.preventDefault();">
                    <input type="email" class="email" placeholder="Digite seu e-mail" required>
                    <input type="submit" value="Inscrever" class="btn">
                </form>
            </div>
        </div>
    </footer>

    <script>
        const USUARIO_LOGADO = <?= $usuario_nome ? 'true' : 'false' ?>;
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src='main.js'></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>
